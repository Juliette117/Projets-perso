@extends('components.base')

@section('content')
<div class="jumbotron p-4 p-md-2">
    <br>
    <h1 class="display-2 text-center">Films</h1>
    <div class="articles row justify-content-center" >
    @foreach ($articles as $article)
    <div class="col-md-5">
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title fs-3">{{ $article->title}}</h5>
                <p class="card-text fs-5">{{$article->subtitle}}</p>
               
            </div>        
            <a class="btn btn-outline-light" href= "{{ route('article', $article->slug) }}">Voir le synopsis</a>
        </div>
    </div>
    @endforeach
</div>
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection

