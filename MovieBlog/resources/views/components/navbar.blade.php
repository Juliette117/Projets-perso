<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><i class="fas fa-home fs-2"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          {{-- <li class="nav-item"> --}}
            {{-- @if(Auth::user()) --}}
            {{-- @if(Auth::user()->role === 'ADMIN') --}}
            {{-- <a class="dropdown-item" href={{ route('admin')}}>Cassiopée (Page admin)</a> --}}
            {{-- @endif --}}
            {{-- @endif --}}
          {{-- </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Qu'est-ce qu'on veut voir ?
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('articles')}}"> Films</a>
              <a class="dropdown-item" href="{{route('articlespixel')}}"> Séries</a>
              {{-- <a class="dropdown-item" href="#">Lupin (Dessins animés / Anime)</a> --}}
              {{-- <a class="dropdown-item" href="#">Cassiopée (Documentaires)</a> --}}
              {{-- <a class="dropdown-item" href="{{route('watchlistelky')}}"> Ma watchlist</a> --}}
            </li>
            </ul>
          </li>
          <li class="nav-item">
            @if(Auth::user())
            @if(Auth::user()->role_id===1)
              <a class="dropdown-item"href="http://localhost:8000/admin" target="_blank">Gérer le site</a>
            @endif
            @endif
            
            {{-- <a class="nav-link disabled" href="http://localhost:8000/admin" tabindex="-1" aria-disabled="true">Pizuki</a> --}}
          </li>
        </ul>
        @if(Auth::user())
        <span class="navbar-brand fs-2">Bonjour {{ Auth::user()->name }}</span>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown-item">
            <form method="POST" action="{{ route('logout')}}">
              @csrf
                <button type="submit" class="dropdown-item">Me déconnecter</button>
            </form>
            @else
            <li><a class="dropdown-item pb-3" href="{{ route('login')}}">Me connecter</a></li>
            @endif
        </ul>
       
        <livewire:search />
       
      </div>
    </div>
  </nav>