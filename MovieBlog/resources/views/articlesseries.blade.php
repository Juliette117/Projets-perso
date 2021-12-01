@extends('components.base')

@section('content')
<div class="jumbotron p-4 p-md-2">
    <br>
    <h1 class="display-2 text-center">Séries</h1>
    <div class="articles row justify-content-center">
        @foreach ($articlesSeries as $articlesSerie)
        <div class="col-md-5">
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-title fs-3">{{  $articlesSerie->title}}</h5>
                    <p class="card-text fs-5">{{$articlesSerie->subtitle}}</p>
                    <img src="{{ Voyager::image($articlesSerie->picture) }}" class="w-25 mx-3"/>
                    <span class="badge rounded-pill bg-light fs-5">{{ $articlesSerie->category->label }}</span>
                </div>
                    <a class="btn btn-outline-light" href= "{{ route('articleserie') }}">Voir le synopsis</a>
            </div>
        </div>
        @endforeach
        
@endsection


{{-- <div class="articles row justify-content-center"> --}}
    {{-- @foreach ($articlesSeries as $articlesSerie) --}}
    {{-- <div class="col-md-5"> --}}
        {{-- <div class="card my-4"> --}}
            {{-- <div class="card-body"> --}}
                {{-- <h5 class="card-title fs-3">{{$articlesSerie->title}}</h5> --}}
                {{-- <p class="card-text fs-5">{{$articlesSerie->subtitle}}</p> --}}
                {{-- <img src="{{ Voyager::image($articleSerie->picture) }}" class="w-25 mx-3"/> --}}
                {{-- <span class="badge rounded-pill bg-light fs-5">{{ $articleSerie->category->label }}</span> --}}
                {{-- <i class=" btn far fa-heart fs-1"  onmouseover="this.style.color='rgb(255, 0, 119)';" onmouseout="this.style.color='white';" wire:click.prevent="addLike()"></i> --}}
            {{-- </div>         --}}
            {{-- <a class="btn btn-outline-light" href= "{{ route('article', $article->slug) }}">Voir le synopsis</a> --}}
        {{-- </div> --}}
    {{-- </div> --}}
