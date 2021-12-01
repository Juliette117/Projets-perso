<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articleseries;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //affiche homepage
    public function home()
    {
        return view('home');
    }

    public function articlesseries()
    {
        $articlesSeries = Articleseries::all();
        return view('articlesseries', 
        [
            'articlesSeries' => $articlesSeries
        ]);
    }

    public function watchlistelky()
{
    return view('watchlistelky');
}

    public function index()
    {
        return view('articles', [
            'articles' => Article::paginate(6),
            'categories' => Category::all()
        ]);
    }

    public function show(Article $article)
    {
        
        return view('article', [
            'article' => $article,
            'comments' => Comment::where('article_id', $article->id)->orderBy('created_at', 'desc')->paginate(20)

        ]);
    }

    public function articleserieshow(Articleseries $articlesSerie)
    {
    
        return view('articleserie', [
            'articleserie' => $articlesSerie
        ]);
    }


}
