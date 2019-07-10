@extends('templates.layout')
@section('content')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Modification d'un article</h1>        
    </div>
</div>
<div class="container">
    <form action="/articles/{{ $article->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre" placeholder="Titre de l'article" value="{{ $article->titre }}">
            @if ($errors->has('titre'))
                <small class="text-danger">{{$errors->first('titre')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="contenu">Contenu</label>
            <textarea name="contenu" class="form-control" id="contenu" placeholder="Contenu de l'article" rows="5">{{ $article->contenu }}</textarea>
            @if ($errors->has('contenu'))
                <small class="text-danger">{{$errors->first('contenu')}}</small>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form> 
</div>   
    
@endsection