<div>
    <div>
        @if (session()->has('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif
        @foreach ($categories as $category)
        <div class="checkbox-inline">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="{{ $category->id }}" wire:model="activeFilters.{{ $category->id }}"/>
                <label class="custom-control-label">
                    {{-- <i class="fas fa-{{ $category->icon}}"></i> --}}
                    {{ $category->label}}
                </label>
            </div>
        </div>
        @endforeach
    </div>
    <div class="articles row justify-content-center">
        @foreach ($articles as $article)
        <div class="col-md-5">
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-title fs-3">{{ $article->title}}</h5>
                    <p class="card-text fs-5">{{$article->subtitle}}</p>
                    <img src="{{ Voyager::image($article->picture) }}" class="w-25 mx-3"/>
                    <span class="badge rounded-pill bg-light fs-5">{{ $article->category->label }}</span>
                    <i class=" btn far fa-heart fs-1"  onmouseover="this.style.color='rgb(255, 0, 119)';" onmouseout="this.style.color='white';" wire:click.prevent="addLike"></i>
                </div>        
                
                
                
                
                
                <a class="btn btn-outline-light" href= "{{ route('article', $article->slug) }}">Voir le synopsis</a>
            </div>
            
        </div>
        @endforeach
        <div class="d-flex justify-content-center mt-5"> {{ $articles->links() }}</div>
       
    </div>





