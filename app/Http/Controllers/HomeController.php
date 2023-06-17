<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index():View
    {
        $collections = Collection::query()
        ->withWhereHas('items')->take(3)
        ->get();
        return view('home.index', compact('collections'));
    }

    public function explore(Request $request):View
    {
        $collections = Collection::query()
        ->withWhereHas('items')
        ->get();
        $categories = Category::query()
            ->withWhereHas('items')
            ->get();

        if($request->has('limit') && $request->input('limit') == 0) {
            $items = Item::all();
        } else {
            $items = Item::all()->take(6);
        }

        return view('home.pages.explore', compact('collections', 'categories', 'items'));
    }

}
