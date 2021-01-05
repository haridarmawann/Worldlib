<?php

namespace App\Http\Controllers;

use App\Museum;
use App\Article;
use App\Item;
use App\Type;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    public function index(Request $request){

        $museum = Museum::with(['article','item','country'])
                            ->withCount('article','item')
                            ->where('id',$request->id)
                            ->firstOrFail();

        $articles = Article::where('museum_id',$request->id)->get();
        $items = Item::where('museum_id',$request->id)->get();
        $types = Type::all();
        
        return view('pages.detail_museum',[
            'museum' => $museum,
            'articles' =>$articles,
            'items' => $items,
            'types' => $types
            

        ]);
    }
}
