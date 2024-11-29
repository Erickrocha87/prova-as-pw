<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.index', compact('artworks'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('artworks.create', compact('artists'));
    }

    public function store(Request $request)
    {
        Artwork::create($request->all());
        $request->validate([
            'title' => 'required',
            'creation_year' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $artwork = new artwork();
        $artwork->title = $request->title;
        $artwork->creation_year = $request->creation_year;
        $artwork->category = $request->category;
        $artwork->image = 'images/'.$imageName;
        $artwork->save();

        return redirect('artworks')->with('success', 'Artwork created successfully.');
    }

    public function edit($id)
    {
        $artist = Artist::all();
        $artwork = Artwork::findOrFail($id);
        return view('artworks.edit', compact( 'artwork', 'artist'));
    }

    public function update(Request $request, $id)
    {
        $artwork = Artwork::findOrFail($id);
        
        $artwork->title = $request->title;
        $artwork->creation_year = $request->creation_year;
        $artwork->category = $request->category;

        if(!is_null($request->image)){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $artwork->image = 'images/'.$imageName;

        }
        $artwork->save();

        return redirect('artworks')->with('success', 'Artwork updated successfully.');
    }

    public function destroy($id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->delete();
        return redirect('artworks')->with('success', 'Artwork deleted successfully.');
    }
}
