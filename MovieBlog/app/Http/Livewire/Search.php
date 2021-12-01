<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;


class Search extends Component
{
    public String $search = '';
    public $articles = [];
    public Int $selectedIndex = 0;

    public function incrementIndex()
    {
        if($this->selectedIndex === count($this->articles) -1){
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex ++;
    }

    public function decrementIndex()
    {
        if($this->selectedIndex === 0){
            $this->selectedIndex = (count($this->articles) - 1);
            return;
        }
        $this->selectedIndex --;
    }

    //Afficher résultat de la recherche 
    public function showArticle()
    {
        if(count($this->articles)) { 
            //Afficher un article en aléatoire
            // $this->articles = Article::inRandomOrder()->get();
            return redirect()->route('article', [$this->articles[$this->selectedIndex]['slug']]);
        }
    }

    public function updatedSearch()
    {
        $words = '%' . $this->search . '%';

        if (strlen($this->search) > 1) {
            $this->articles = Article::where('title' , 'like' , $words)
            ->orWhere('subtitle', 'like' , $words)
            ->orWhere('content', 'like' , $words)
            ->get();
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
