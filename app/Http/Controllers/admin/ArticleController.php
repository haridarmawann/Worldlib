<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Article;
use App\Museum;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('museum')->get();
        // "SELECT * FROM articles, museums
        // where articles.museum_id=museums.id
        
        return view('pages.admin.article.index',[
            'articles' => $articles
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
        // SELECT * FROM museums
        return view('pages.admin.article.create',[
            'museums' => $museums,
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->all();
            Article::create($data);
            // INSERT INTO Articles (name, description, museum_id)
            // VALUES ('KOLEKSI WALTER SPIES', 'lorem-ipsum', '1');
            return redirect()->route('article.index')->with('status', 'Article Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        
        $museums = Museum::select('id','name')->get();
        // SELECT id,name FROM museums
        // $museums = Museum::all();
        return view('pages.admin.article.edit',[
            'article' => $article,
            'museums' => $museums,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->all();
           
        $article->update($data);
        // UPDATE articles
        // SET nama = nama, deskripsi = deskripsi
        // WHERE ID = 1;
        return redirect()->route('article.index')->with('status', 'Article Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        // DELETE FROM articles WHERE id = '1';
        return redirect()->route('article.index')->with('delete','Article deleted');
    }
}
