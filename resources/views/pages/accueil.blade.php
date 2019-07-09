@extends('templates.layout')

@section('content')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Bienvenue sur l'{{ $titre }}</h1>
        <p class="lead">Le titre ci dessus est dynamique</p>
    </div>
</div>
@endsection