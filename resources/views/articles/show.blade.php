@extends('templates.layout')
@section('content')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Détails</h1>        
    </div>
</div>   
    <div class="card mb-3">
        <div class="card-header">
                <h5>{{ $article->titre }}</h5>
                <small>Créé le {{ $article->created_at }}</small>
        </div> 
        <div class="card-body">
            <p class="card-text">{{ $article->contenu }}</p>
                    
        </div>
        <div class="card-footer">
            <div class="row justify-content-start">
                <a href="/articles" class="btn btn-secondary mr-2">Retour</a>
                <a href="/articles/{{$article->id}}/edit" class="btn btn-info mr-2">Modifier</a>
                <form action="/articles/{{$article->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mr-2">Supprimer</button>
                </form>
            </div>
        </div>
    </div>

@endsection