<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemListController extends Controller
{
    public function keyword_search(Request $request)
    {
        $keyword = $request->input('search') ?? '';
        $pat = '%' . addcslashes($keyword, '%_\\') . '%';
        $items = Item::where('name', 'LIKE', $pat)->get();
        $items_amount = $items->count();
        return view('items_list.index', compact('items' , 'items_amount'));
    }
}