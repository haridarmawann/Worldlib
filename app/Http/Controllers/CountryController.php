<?php

namespace App\Http\Controllers;

use App\Country;
use App\Item;
use App\Museum;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request){

        $country = Country::with(['museum','item'])
                            ->withCount('museum','item')
                            ->where('id',$request->id)
                            ->firstOrFail();
        $museums = Museum::where('country_id',$request->id)->withCount('item')->get();
        $items = Item::where('country_id',$request->id)->get();
        
        return view('pages.detail_country',[
            'country' => $country,
            'museums'  => $museums,
            'items' => $items

        ]);
    }
}
