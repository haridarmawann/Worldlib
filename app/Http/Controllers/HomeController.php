<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(){

    return view('pages.home');
    }

    public function detail_country(){

        return view('pages.detail_country');
        }
    public function detail_museum(){

        return view('pages.detail_museum');
    
    }

    public function detail_item(){

        return view('pages.detail_item');
    
    }
    
}
