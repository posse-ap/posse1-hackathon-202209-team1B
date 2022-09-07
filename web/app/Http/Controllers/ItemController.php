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
        $item = Item::where('id', $id)->with('category')->first();
        return view('items.show', compact('item'));
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
}
