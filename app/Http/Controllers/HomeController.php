<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index():View
    {
        $collections = Collection::query()
        ->withWhereHas('items')->take(3)
        ->get();

        $users = User::query()->withWhereHas('items')->get();

        $items = Item::all()->take(4);

        return view('home.index', compact('collections', 'users', 'items'));
    }

    public function explore(Request $request):View
    {
        $collections = Collection::query()
        ->withWhereHas('items')
        ->get();
        $categories = Category::query()
            ->withWhereHas('items')
            ->get();

        //se crea la consulta, para luego anidar los filtros
        $query_items = Item::query();

        //se valida que exista el parametro y que no este vacio
        if($request->has('categories') && $request->input('categories') != '') {
            //se convierte el string a un array de enteros
            $explode_id = array_map('intval', explode(',', $request->input('categories')));
            //se filtra la consulta con los ids del array
            $query_items->whereIn('category_id', $explode_id);
        }

        //se valida que exista el parametro y que no este vacio
        if($request->has('collections') && $request->input('collections') != '') {
            //se convierte el string a un array de enteros
            $explode_id = array_map('intval', explode(',', $request->input('collections')));
            //se filtra la consulta con los ids del array
            $query_items->whereIn('collection_id', $explode_id);
        }

        if($request->has('limit') && $request->input('limit') == 0) {
            $items = $query_items->get();
        } else {
            $items = $query_items->get()->take(6);
        }

        return view('home.pages.explore', compact('collections', 'categories', 'items'));
    }

    public function author(User $user, Request $request):View
    {
        $categories = Category::all()->take(4);

        $query_items = Item::query()->where('user_id', $user->id);

        //se valida que exista el parametro y que no este vacio
        if($request->has('category') && $request->input('category') != '') {
            $query_items->where('category_id', $request->input('category'));
        }

        $items = $query_items->get();

        return view('home.pages.author', compact('user', 'categories', 'items'));
    }

    public function follow_author(User $user) {
        Auth()->user()->following()->attach($user->id);
        return redirect()->back();
    }

    public function unfollow_author(User $user) {
        Auth()->user()->following()->detach($user->id);
        return redirect()->back();
    }

}
