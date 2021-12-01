<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function store(Article $article)
    {
        request()->validate([
            'content' =>'required|min:3'
        ]);


        Comment::create([
            'user_id' => auth()->id(),
            'article_id' => $article->id,
            'content' => request('content')
        ]);

        $comments = Comment::all();
        //orderBy('created_at', 'desc')->paginate(20)
        //$comments = Comment::all();
        // DB::select("SELECT * FROM article WHERE user_id = ? AND article_id = ? ", [ auth()->id(), $id]);
        $comments->content = request('content');
        $comments->user_id = auth()->id();
        $comments->article_id = $article->id;
        
        //$comments->where($comments = $article->id);

         return redirect()->route('article', $article);
    }

}


// if (! auth()->check()) {
    // session()->flash("Vous devez être connecté pour voir cette page.")->error();
// }