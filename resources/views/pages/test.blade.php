@extends('templates.layout')

@section('content')
<h1>Bienvenue sur la page de {{ $titre }}</h1>
<h3>{{ $contenu }}</h3>
<ul class="list-group">
    @if (count($liste) > 0)
        @foreach($liste as $element)
            <li class="list-group-item">{{ $element }}</li>
        @endforeach
    @endif
</ul>
@endsection