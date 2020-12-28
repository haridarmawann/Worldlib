<?php

namespace App\Http\Controllers;

use App\Museum;
use App\Country;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::with('country')->get();

        return view('pages.admin.museum.index',[
            'museums' => $museums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('pages.admin.museum.create',[
            'countries' => $countries
        ]);
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
            'country_id' =>'required|integer|exists:countries,id',
            'name'=>'required|max:100',
            'description'=>'required',
            'city'=>'required|max:100',
            'logo'=>'required|image'
            ]);
        
            $data = $request->all();
            $data['logo'] = $request->file('logo')->store(
                'assets/gallery', 'public'
            );
            Museum::create($data);
    
            return redirect()->route('museum.index')->with('status', 'Museum Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        $countries = Country::where('id', $museum->country_id)->get();

        return view('pages.admin.museum.edit',[
            'museum' => $museum,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        $data = $request->all();
        $data['logo'] = $request->file('logo')->store(
            'assets/gallery', 'public'
        );    
        $museum->update($data);
        return redirect()->route('museum.index')->with('status', 'Museum Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        Museum::destroy($museum->id);
        return redirect()->route('museum.index')->with('delete','Museum deleted');
    }
}
