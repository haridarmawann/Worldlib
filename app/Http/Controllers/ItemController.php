<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request){
        $item = Item::with(['museum','type','artist'])
        ->where('id',$request->id)
        ->firstOrFail();

    
        return view('pages.detail_item',[
            'item' => $item
        ]);
    }
}
