<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemUseRequest;
use App\Models\Item;
use App\Models\RentalLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function show(int $id)
    {
        $item = Item::where('id', $id)->with(['category', 'rental_logs.user'])->first();
        $current_user = RentalLog::getCurrentUser($id);
        return view('items.show', compact('item', 'current_user'));
    }

    public function store(ItemUseRequest $request, int $id)
    {
        if (is_null(RentalLog::getCurrentUser($id))) {
            $start_date = Carbon::today()->toDateString();
            $end_date = $request->end_date;
            RentalLog::create([
                'user_id' => Auth::id(),
                'item_id' => $id,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ]);
        };
        return back();
    }

    public function update(ItemUseRequest $request, int $id)
    {
        $rental_log = RentalLog::find($id);
        if ($rental_log && $rental_log->user_id == Auth::id()) {
            $rental_log->end_date = $request->end_date;
            $rental_log->save();
        }
        return back();
    }

    public function return(ItemUseRequest $request, int $id)
    {
        $rental_log = RentalLog::find($id);
        $carbon = new Carbon;
        if ($rental_log && $rental_log->user_id == Auth::id()) {
            $rental_log->return_date = $carbon->today()->toDateTimeString();
            $rental_log->save();
        }
        return back();
    }
}
