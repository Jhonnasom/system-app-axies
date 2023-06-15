<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $collections = Auth::user()->collections()->get();
        $categories = Category::all();
        return view('items.create', compact('collections', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'royalties' => 'required',
            'collection_id' => 'required',
            'category_id'=>'required'
        ]);

        $item = Auth::user()->items()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'royalties' => $request->input('royalties'),
            'method' => '$',
            'collection_id' => $request->input('collection_id'),
            'category_id' => $request->input('category_id'),
        ]);


/**      image_item es el nombre que tenemos en el input de upload file**/
        $item->addMediaFromRequest('image_item')->toMediaCollection('image_items');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item): View
    {
        return \view('items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
