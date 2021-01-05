<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    public function index(Request $request){
        $artist = Artist::with(['item'])
        ->where('name',$request->name)
        ->firstOrFail();

        // select * from `artists` where `name` = $_GET('name') 
        

    return view('pages.artist',compact('artist'));                       
    }
}
