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
            
            <a href="/articles" class="btn btn-secondary">Retour</a>
            </div>
        </div>

@endsection