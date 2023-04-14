@extends('layouts.app')

@section('content')

    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <img src="{{ $comic->thumb }}" alt="" width="300">
    <p class="price">Prezzo: {{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di uscita: {{ $comic->sale_date }}</p>
    <p>Genere: {{ $comic->type }}</p>

@endsection