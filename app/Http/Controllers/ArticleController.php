<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
             'title' => 'required',
            'body' => 'required',
            'id_categorie'=>'required',
            'id_user'=>'required',
            'image_path'=>'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $article= new Article();
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->id_categorie = $request->input('id_categorie');
        $article->id_user = $request->input('id_user');
        $article->image_path = $request->input('image_path');
        $article->image_path = $request->file('image_path');  
        $article->save();
        return redirect()->route('articles.index')->with('success','Article created successfully');
                          
                            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
             'title' => 'required',
            'body' => 'required',
            'id_categorie'=>'required',
            'id_user'=>'required',
            'image_path'=>'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $article= new Article();
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->id_categorie = $request->input('id_categorie');
        $article->id_user = $request->input('id_user');
        $article->image_path = $request->input('image_path');
        $article->image_path = $request->file('image_path');  
        $article->save();
        return redirect()->route('articles.index')->with('success','Article created successfully');
                          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
  
}