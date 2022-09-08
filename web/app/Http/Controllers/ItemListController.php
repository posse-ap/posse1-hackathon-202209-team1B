<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemListController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::get();

        $keyword = $request->input('search') ?? '';
        $pat = '%' . addcslashes($keyword, '%_\\') . '%';
        $items = Item::where('name', 'LIKE', $pat)->get();
        $request->session()->flash('search_keyword', $keyword);

        // 新着順or人気順
        if ($request->sort === "新着順") {
            $items = Item::where('name', 'LIKE', $pat)->latest()->get();
        } elseif ($request->sort === "人気順") {
            // $items = Item::where('name', 'LIKE', $pat)->latest()->get();
            // TODO:
        }

        // カテゴリで並び替え
        if ($request->category_id) {
            $items = Item::where('name', 'LIKE', $pat)->where('category_id', $request->category_id)->get();
        } elseif ($request->category_id === "全て"){
            $items = Item::where('name', 'LIKE', $pat)->get();
        }

        // 利用状況で並び替え
        if ($request->status === "利用可能") {
            $items =  Item::isAvailable($pat);
        } elseif($request->status === "利用中"){
            $items =  Item::isUnavailable($pat);
        } elseif($request->status === "全て"){
            $items = Item::where('name', 'LIKE', $pat)->get();
        }

        $items_amount = $items->count();
        return view('items_list.index', compact('items' , 'items_amount', 'categories'));
    }

    public function tag_search($tag_name)
    {
        $pat = '%' . addcslashes($tag_name, '%_\\') . '%';
        $items = Item::where('name', 'LIKE', $pat)->get();
        $items_amount = $items->count();
        $categories = Category::get();
        return view('items_list.index', compact('items' , 'items_amount', 'categories'));
    }
}