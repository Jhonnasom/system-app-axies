<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index():View
    {
        $collections = Collection::query()
        ->withWhereHas('items')
        ->get();
        return view('home.index', compact('collections'));
    }

}
