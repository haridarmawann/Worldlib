<?php

namespace App\Http\Controllers;

use App\Country;
use App\Item;
use App\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index(Request $request){
        //  DB::enableQueryLog();
        $country = Country::with(['museum','item'])
                            ->withCount('museum','item')
                            ->where('id',$request->id)
                            ->firstOrFail();
        // dd(\DB::getQueryLog());
        
        // select `countries`.*, 
        // (select count(*) from `museums` where `countries`.`id` = `museums`.`country_id`) as `museum_count`, 
        // (select count(*) from `items` where `countries`.`id` = `items`.`country_id`) as `item_count` 
        // from `countries` where `id` = ?  
        
        $museums = Museum::where('country_id',$request->id)->withCount('item')->get();
        // select `museums`.*,from `museums` where `country_id` = ? 
        $items = Item::where('country_id',$request->id)->get();
        // select `items`.*,from `museums` where `country_id` = ?
        return view('pages.detail_country',[
            'country' => $country,
            'museums'  => $museums,
            'items' => $items

        ]);
    }
}
