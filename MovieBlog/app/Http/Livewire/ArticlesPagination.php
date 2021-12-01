<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesPagination extends Component
{
    public function render()
    {
        return view('livewire.articles-pagination', [
            'articles' => Article::paginate(2),

        ]);
    }
}
