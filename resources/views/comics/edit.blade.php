@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="fst-italic text-center py-5">Modifica un fumetto</h1>
        <form method="POST" action="{{route('comics.update', $comic)}}" class="row justify-content-center py-3">

            @csrf 
            @method('PUT')

            <div class="mb-5 col-12">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
            </div>
                
            <div class="mb-5 col-4">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea type="text" id="description" name="description" class="form-control"> value="{{$comic->description}}"</textarea>
            </div>

            <div class="mb-5 col-4">
                <label for="thumb" class="form-label">Anteprima:</label>
                <input type="text" id="thumb" name="thumb" class="form-control" value="{{$comic->thumb}}">
            </div>

            <div class="mb-5 col-4">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price" class="form-control" value="{{$comic->price}}">
            </div>

            <div class="mb-5 col-4">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series" class="form-control" value="{{$comic->series}}">
            </div>

            <div class="mb-5 col-4">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3 col-4">
                <label for="type" class="form-label">Genere:</label>
                <input type="text" id="type" name="type" class="form-control" value="{{$comic->type}}">
            </div>

            <button type="submit" class="col-4 btn btn-success text-uppercase rounded-pill">Salva modifica</button>
        </form>
    </div>
   
@endsection