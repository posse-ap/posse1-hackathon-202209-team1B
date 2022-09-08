<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $displayLimit = 4;
        $latestItems = Item::latestItems();
        $availableSoonItems = Item::availableSoonItems();
        dd($availableSoonItems);
        $categoryItems = Category::findCategoriesWithItem();
        return view('dashboard', compact('displayLimit', 'latestItems', 'categoryItems', 'availableSoonItems'));
    }
}
