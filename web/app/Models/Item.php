<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    const LATEST_ITEMS_DAYS = 30;

    protected $table = 'items';
    protected $guarded = ['id'];

    /**
     * 新着備品一覧を取得
     *
     * @return Collection
     */
    public static function latestItems(): Collection
    {
        return self::whereDate('created_at', '>=', Carbon::now()->subDays(self::LATEST_ITEMS_DAYS))
            ->with('category')->withRentalLogsWithUser()
            ->get();
    }

    public static function availableSoonItems(): Collection
    {
        $items = self::with(['rental_logs' => function($query) {
            $query->where('return_date',null)->whereDate('end_date', '<=',Carbon::now()->addDays(3));
        }])
        ->whereHas('rental_logs',function($query) {
            $query->where('return_date',null)->whereDate('end_date', '<=',Carbon::now()->addDays(3));
        })
        ->get();
        return $items;
    }

    public static function isAvailable($pat): Collection
    {
        $items = self::where('name', 'LIKE', $pat)->with(['rental_logs' => function($query) {
            $query->where('return_date',  '!=', null);
        }])
        ->whereHas('rental_logs',function($query) {
            $query->where('return_date',  '!=', null);
        })
        ->get();
        return $items;
    }

    public static function isUnavailable($pat): Collection
    {
        $items = self::where('name', 'LIKE', $pat)->with(['rental_logs' => function($query) {
            $query->where('return_date',  null);
        }])
        ->whereHas('rental_logs',function($query) {
            $query->where('return_date',  null);
        })
        ->get();
        return $items;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rental_logs()
    {
        return $this->hasMany(RentalLog::class);
    }

    public function getLatestRentalLog()
    {
        return $this->rental_logs()->where("return_date", null)->first();
    }

    public function scopeWithRentalLogsWithUser($query)
    {
        $query->with(['rental_logs' => function ($query) {
            $query->where('return_date', NULL)->with('user');
        }]);
    }
}