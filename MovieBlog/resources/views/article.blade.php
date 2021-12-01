@extends('components.base')

@section('content')

<div>
    <div class="text center row justify-content-center fst-italic bg-secondary my-5 p-5" style=" color: black"> 
            <h2 class="display-2 text-center fw-bold">{{ $article->title }}</h2>
            <h5 class="text-center">{{ $article->subtitle}}</h5>
        <div class="d-flex justify-content-center my-3">
            <span class=" badge rounded-pill bg-light fs-4">{{ $article->category->label }}</span>
        </div>        
            <img src="{{ Voyager::image($article->picture) }}" class="w-50 my-4"/>
            {{-- Afficher correctement le texte --}}
            {{ Markdown::parse($article->content) }}<br>
            <br>
            <a class="btn btn-outline-light my-2" href="{{ route('articles') }}">
                Revenir à la liste des films<br>
            <i class="fas fa-arrow-left"></i><br>
            </a>
            <hr style="color:white">
            @if(Auth::guest())
                <span class="fs-5" style="color: white">
                    @lang('Vous devez être connécté pour ajouter un commentaire.')
                </span>
            @endif
        <form class="mt-2" method="POST" action="{{route('comments.store',$article->id) }}">
            @csrf
            <div class="form-group">
                <textarea class="pt-2 px-2" style="border-style: hidden" name="content" placeholder="Écrire un commentaire..." cols="70" rows="5"></textarea>
            </div>
                <button class="btn btn-outline-light mt-2">Commenter</button>
        </form>
    </div>
</div>   

<section class="col-span-8 col-start-5 mt-10">
    <article class="flex">
        <div>
            <hr>
            <h2 class="pb-2">Commentaires :</h2>
            <br>
            @forelse ($comments as $comment)
            <header>
                <h3 class="font-bold fs-4">{{$comment->user->name}}</h3>
                <p class="fs-6">
                    
                    <small>Posté le {{$comment->created_at->format('j/m/Y')}} à {{$comment->created_at->format("H:i")}}</small>
                </p>
            </header>
            <p class="pb-2 fs-5"> {{ $comment->content }}</p><br>
            @empty
                <div class="pb-3 fs-5">Il n'y a pas de commentaire sur ce film, soyez le premier à en écrire un !</div>
            @endforelse
</section>

    
  
 </div>

@endsection

