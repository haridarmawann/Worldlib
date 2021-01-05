<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(Request $request){
        $article = Article::with(['museum'])
                 ->where('id',$request->id)
                 ->firstOrFail();
                  
        return view('pages.article', compact('article'));
        
    }
}
