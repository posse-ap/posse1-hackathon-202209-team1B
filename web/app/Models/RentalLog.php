<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalLog extends Model
{
    use HasFactory;

    protected $dates = [
        'start_date',
        'end_date',
        'return_date',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'item_id',
        'start_date',
        'end_date',
        'return_date',
    ];

    public static function getCurrentUser(int $item_id)
    {
        $item = self::where("item_id", $item_id)->where("return_date", null)->first();
        if ($item) {
            return $item->user_id;
        } else {
            return null;
        }
    }


}
