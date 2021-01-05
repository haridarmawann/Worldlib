<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\Item;
use App\Artist;
use App\Museum;
use App\Type;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with(['museum','artist','type','article','country'])->paginate(3);
        return view('pages.admin.item.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $museums = Museum::all();
        $artists = Artist::all();
        $types   = Type::all();
        $articles = Article::all();
        $countries = Country::pluck('country_name', 'id');
        return view('pages.admin.item.create',[
            'museums' => $museums,
            'artists' => $artists,
            'types'   => $types,
            'articles' => $articles,
            'countries' => $countries
        ]);
    }
    // public function subCat(Request $request)
    // {
    //     $cities = Museum::where('country_id', $request->get('id'))
    //         ->pluck('name', 'id');

    //     return response()->json($cities);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
              
            $data = $request->all();
            $data['photo'] = $request->file('photo')->store(
                'assets/gallery', 'public');
            Item::create($data);
    
            return redirect()->route('item.index')->with('status', 'Museum Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $museums = Museum::all();
        $artists = Artist::all();
        $types   = Type::all();
        $articles = Article::all();
        $countries = Country::all();
        return view('pages.admin.item.edit',compact('item','museums','artists','types','articles','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
            $data = $request->all();
            $data['photo'] = $request->file('photo')->store(
                'assets/gallery', 'public'
            );   
            $item->update($data);
            return redirect()->route('item.index')->with('status', 'Item Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect()->route('item.index')->with('delete','Item deleted');
    }
}
