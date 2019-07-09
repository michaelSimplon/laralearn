@extends('templates.layout')
@section('content')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Liste des articles</h1>        
    </div>
</div>
@if (count($articles) > 0)
    @foreach ($articles as $article)
        <div class="card mb-3">
        <div class="card-header">
                <h5>{{ $article->titre }}</h5>
                <small>Créé le {{ $article->created_at }}</small>
        </div> 
        <div class="card-body">
            <p class="card-text">{{ str_limit($article->contenu, 150) }}</p>
        
        <a href="articles/{{ $article->id }}" class="btn btn-primary">Voir l'article</a>
        </div>
        </div>
    @endforeach
@else
    <h3>Aucun article n'a été publié</h3>
@endif


@endsection