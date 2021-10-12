@extends('components.base')

@section('content')
    <div class="jumbotron">
        <h2 class="display-4 text-center my-3">{{ $article->title }}</h2>
        <h5 class="text-center">{{ $article->subtitle}}</h5>
        <div class="d-flex justify-content-center my-3">
            <span class="badge rounded-pill bg-light">{{ $article->category->label }}</span>
        </div>
    </div>        
    <div class="container">
        <div class="text center fst-italic bg-secondary my-5 p-4" style=" color: black"> {!! $article->content !!}</div>
    </div>
    <div class="d-flex justify-content-center" >
        <a class="btn btn-outline-light" href="{{ route('articles') }}">
            Revenir à la liste des films<br>
        <i class="fas fa-arrow-left"></i>
        </a>
    </div>
@endsection

