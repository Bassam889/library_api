<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bookmark::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]); 
        return Bookmark::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Bookmark::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bookmark = Bookmark::find($id);
        $bookmark->update($request->all());
        return $bookmark;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Bookmark::destroy($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(string $title)
    {
        return Bookmark::where('title', 'like', '%'.$title.'%')->get();
    }
}
