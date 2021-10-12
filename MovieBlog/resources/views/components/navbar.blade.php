<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><i class="fas fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            @if(Auth::user())
            @if(Auth::user()->role === 'ADMIN')
              <a class="dropdown-item" href={{ route('admin')}}>Cassiopée</a>
            @endif
            @endif
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Elky
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('articles')}}">Onyxia</a>
              
              <a class="dropdown-item" href="#">Pixel</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Pizuki</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown-item">
            @if(Auth::user())
            <form method="POST" action="{{ route('logout')}}">
              @csrf
                <button type="submit" class="dropdown-item">Déconnexion</button>
            </form>
            @else
            <li><a class="dropdown-item" href="{{ route('login')}}">Me connecter</a></li>
            @endif
        </ul>
        <form class="d-flex">
          <input class="form-control me-1" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>