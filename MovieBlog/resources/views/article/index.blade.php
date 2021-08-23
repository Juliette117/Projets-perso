@extends('components.base')

@section('content')<br>
<div class="jumbotron p-4 p-md-2">
    <h2 class=" text-center display-5">Le coin des administrateurs</h2><br>
    <div class="d-flex justify-content-center">
      <a class="btn btn-outline-light my-3" href="{{ route('article.create')}}">Ajouter un nouveau film<i class="fas fa-plus mx-1"></i></a>
    </div>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr class="fs-4">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Crée le</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
          <tr class="table-secondary" style="color: rgb(44, 25, 95)">
            <th scope="row">{{$article->id}}</th>
            <td class="fs-5" >{{$article->title}}</td>
            <td>{{$article->dateFormated()}}</td>
            <th>
              <div class="input-group-text fs-6">
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning mx-2" >Éditer</a>
                <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
              </div>
                <form action={{ route('article.delete', $article->id) }} method="POST">
                  @csrf
                  @method("DELETE")
                    <div class="modal" id="modal-open-{{ $article->id }}">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Suppression</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">
                              <span aria-hidden="true"></span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Êtes-vous sûr de vouloir supprimer cet article ?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Oui</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">Annuler</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
      </div>
</div>
@endsection

