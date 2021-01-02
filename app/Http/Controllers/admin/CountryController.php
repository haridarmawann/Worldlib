<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\Storage;



class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('country_name', 'asc')->paginate(5);
        return view('pages.admin.country.index',
                    ['countries' => $countries]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.country.create');
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
            'country_name' => 'required|max:50',
            'country_description' => 'required',
            'country_image' =>'required|image'
            ]); 

            $data = $request->all();
            $data['country_image'] = $request->file('country_image')->store(
                'assets/gallery', 'public');

        Country::create($data);
        //query
        return redirect()->route('country.index')->with('status', 'Country Added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('pages.admin.country.edit',[ 'country' => $country ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|max:50',
            'country_description' => 'required',
            'country_image' =>'required|image'
            ]); 

            $data = $request->all();
            $data['country_image'] = $request->file('country_image')->store(
                'assets/gallery', 'public'
            );
            $country = Country::findOrFail($id);    
            $country->update($data);
            return redirect()->route('country.index')->with('status', 'Country Update!');
                           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    // public function destroy(Country $country,$id)
    {
        // Country::destroy($country->id); 
        // return redirect()->route('country.index')->with('status', 'Country Update!');

        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('country.index')->with('delete', 'Country delete!');
    }
}
