<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemListController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search') ?? '';
        $pat = '%' . addcslashes($keyword, '%_\\') . '%';
        $items = Item::where('name', 'LIKE', $pat)->get();
        return view('items_list.index', compact('items'));
    }
}
