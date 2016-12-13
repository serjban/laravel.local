<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','banned']);
    }

    public function index(){
        $articles=Article::all();
        return view('articles',['articles'=>$articles]);

    }

    public function show($id){
        $article=Article::find($id);
        return view('showArticle',['article'=>$article]);
    }

    public function create(){
        return view('createArticle');
    }

    public function store(Request $request){
        //dump($request->all());
        Article::create($request->all());
        return redirect('/articles');
    }

    public function edit($id){
        $article=Article::find($id);
        return view('editArticle',['article'=>$article]);
    }

    public function update(Request $request,$id){
        $article=Article::find($id);
        $article->title=$request->title;
        $article->content=$request->content;
        $article->save();
        return redirect('/articles');
    }

    public function delete($id){
        $article=Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
