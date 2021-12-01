<div>
    <form class="d-flex">
    <input class="form-control me-1 dropdown" type="search" placeholder="Rechercher une œuvre..." aria-label="Search" 
        wire:model="search" 
        wire:keydown.arrow-down.prevent="incrementIndex" 
        wire:keydown.arrow-up.prevent="decrementIndex" 
        wire:keydown.enter.prevent="showArticle">
    <i class="fas fa-search"></i>
    </form>

    <div class="searchresult">
    @if(strlen($search) > 1)
       <div>
            @if(count($articles) > 0)
                @foreach ($articles as $index => $article)
                    <p style=" {{ $index === $selectedIndex ? 'color:#e51b75' : ''}}">{{ $article->title }}</p>
                @endforeach
            @else
                <span style="color:red"> Aucun résultat trouvé pour "{{ $search }}"</span>
            @endif
        </div>
        @endif
    </div>
</div>





