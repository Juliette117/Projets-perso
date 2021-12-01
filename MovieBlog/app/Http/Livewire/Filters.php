<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Filters extends Component
{
    public $categories;
    public $activeFilters = [];
    public $article;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    

    
    public function addLike()
{
    //$userId = Auth::user()->id; 
    
        
        if ($this->isAuth()) {
            //dd('liked');
            session()->flash('message', 'Cette fonctionnalité n\'est pas encore disponible');
            //$this->article->addLike(auth()->user());
            //$userId->like()->toggle($this->article->id); 
        } else {
            session()->flash('message', 'Vous devez être connecté pour mettre un film en favoris !');
            return;
        }
}

    public function render()
    {
        $this->activeFilters = array_filter($this->activeFilters, function($value) {
            return $value !== false;
        });
        return view('livewire.filters', [
            // Si on a pas de filtres actifs
            'articles' => (empty($this->activeFilters)) 
                ? Article::paginate(6)
            // Sinon
                : Article::whereIn('category_id', array_keys($this->activeFilters))->paginate(6)
               
        ]);
    }

    private function isAuth()
    {
        return auth()->check();
    }
}
