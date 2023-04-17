

@extends('layouts.app')

@section('content')

    <div class="container py-5 border">
        <div class="row">
            <div class="col">
                <h1 class="text-center">{{ $comic->title }}</h1>
                <p class="py-3">{{ $comic->description }}</p>
                <img src="{{ $comic->thumb }}" alt="" width="300">
                <p class="price">Prezzo: € {{ $comic->price }}</p>
                <p>Serie: {{ $comic->series }}</p>
                <p>Data di uscita: {{ $comic->sale_date }}</p>
                <p>Genere: <span class="text-uppercase"> {{ $comic->type }}</span></p>
                
            </div>
        </div>
    </div>
    

@endsection