<?php

namespace App\Http\Controllers;

use App\Events\CollectionsLiked;
use App\Models\Collection;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CollectionController extends Controller
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
    public function create():View
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $collection = Auth::user()->collections()->create([
            'name' => $request->input('name'),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function like_collection(Collection $collection) {
        $like = Like::where('user_id', Auth()->user()->id)
            ->where('likeable_type', Collection::class)
            ->where('likeable_id', $collection->id)->first();
        if ($like) {
            $like->delete();
        } else {
            $like = new Like([
                'user_id' => Auth()->user()->id,
                'likeable_id' => $collection->id,
            ]);
            $collection->likes()->save($like);
        }
        event(new CollectionsLiked($collection->id, $collection->likes()->count()));
        return ['likes' => $collection->likes()->count()];
    }
}
