<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function index(Request $request,$type){
        
        $type = Type::with(['item'])
        ->where('type',$type)
        ->firstOrFail();

    return view('pages.type',compact('type'));                       
    }
}
