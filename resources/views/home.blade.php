@extends('layouts/app')

@section('content')

<div class="container">

    <h1>MY FILM</h1>

    @foreach($movies as $movie)
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">TITOLO: {{ $movie->title }}</h5>
            <p class="card-text">TITOLO ORIGINALE: {{ $movie->original_title}}</p>
            <p class="card-text">NAZIONE: {{ $movie->nationality}}</p>
            <p class="card-text">DATA DI USCITA: {{ $movie->date}}</p>
            <p class="card-text">VOTO: {{ $movie->vote}}</p>
        </div>
    </div>
    @endforeach
</div>



@endsection