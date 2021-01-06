<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        return view('pages.admin.artist.index',['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|max:50'  
            ]);

        $data = $request->all();
        
        Artist::create($data);
        return redirect()->route('artist.index')->with('status', 'Artist Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('pages.admin.artist.edit',[ 'artist' => $artist ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
        $request->validate([
            'name' => 'required|max:50'  
            ]);
        
        $data=$request->all();

        $artist= Artist::findOrFail($id);
        $artist->update($data);
        return redirect()->route('artist.index')->with('status','Artist updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        Artist::destroy($artist->id);
        return redirect()->route('artist.index')->with('delete','Artist deleted');
    }
}
