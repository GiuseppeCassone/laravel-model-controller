@extends('layouts/app')

@section('content')

<div class="container mt-5 p-5">

    <h1 class="text-center mb-5">MY FILM</h1>

    <div class="row flex-wrap">

        @foreach($movies as $movie)
        <div class="card align-items-center p-0">
            <img src="{{ $movie->poster }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">TITOLO: {{ $movie->title }}</h5>
                <p class="card-text"><strong>TITOLO ORIGINALE: </strong>{{ $movie->original_title}}</p>
                <p class="card-text"><strong>NAZIONE: </strong>{{ $movie->nationality}}</p>
                <p class="card-text"><strong>DATA DI USCITA: </strong>{{ $movie->date}}</p>
                <p class="card-text"><strong>VOTO: </strong>{{ $movie->vote}}</p>
            </div>
        </div>
        @endforeach

    </div>

</div>



@endsection