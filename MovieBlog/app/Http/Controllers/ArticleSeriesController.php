<?php

namespace App\Http\Controllers;

use App\Models\Articleseries;
use Illuminate\Http\Request;

class ArticleSeriesController extends Controller
{
    public function articleserieshow(Articleseries $articlesSerie)
    {
    
        return view('articleserie', [
            'articleserie' => $articlesSerie
    ]   );
    }
}

