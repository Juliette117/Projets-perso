@extends('components.base')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Éditer cet article</h2>
        <form method="POST" action="{{ route('article.update', $article->id)}}">
            @method("PUT")
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Titre du film"/>
                    @error('title')
                    <span class="invalid-feendback" role="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="col-12">
                <div class="form-group">
                    <label>Sous-titre</label>
                    <input type="text" name="subtitle" value="{{ $article->subtitle }}" class="form-control @error('subtitle') is-invalid @enderror"" placeholder="Sous-titre"/>
                    <small class="form-text text-muted">Type, genre de film</small>
                    @error('subtitle')
                    <span class="invalid-feendback" role="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="col-12">
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea id="tinymce" name="content"  value="{{ $article->content }}" class="@error('content') is-invalid @enderror">
                        {{ $article->content }}
                    </textarea>
                    <small class="form-text text-muted">Synopsis du film</small>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                </div>
                <script>
                    tinymce.init({
                        selector: '#tinymce',
                    });
                </script>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-primary">Éditer</button>
            </div>
            </div>
        </form>

    </div>
@endsection