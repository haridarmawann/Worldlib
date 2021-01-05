<?php

namespace App\Http\Controllers;

use App\Country;
use App\Museum;
use App\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(){
        $countries = Country::withCount('item')->orderBy('country_name','asc')->get();
        return view('pages.home', compact('countries'));
        
        // query
        // Select countries.country_nama, count(items.id)
        // FROM countries
        // JOIN items ON items.country_id = country.id
        // GROUP BY items.country_id
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$countries = Country::withCount('item')
		->where('country_name','like',"%".$cari."%")
		->paginate();
		return view('pages.home',compact('countries'));
 
    }
    
    // public function Livecari(Request $request)
	// {
    //     if($request->ajax())
    //     {
    //         $query = $request->get('query');
    //         if($query != '')
    //         {
    //             $countries = DB::table('countries')
    //                        ->where('country_name','like',"%".$query."%");
    //         }
    //         else
    //         {
    //             $countries = DB::table('countries')
    //                       ->orderBy('country_name','asc')
    //                       ->get();
    //         }
    //     }
 
	// }

    
    
}
