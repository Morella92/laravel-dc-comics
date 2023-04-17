@extends('layouts.app')

@section('content')

    <div class="container py-5 text-center text-uppercase">
        <h1 class="fst-italic">Aggiungi un fumetto</h1>
        <form method="POST" action="{{route('comics.store')}}" class="row justify-content-center py-3">

            @csrf 

            <div class="mb-5 col-12">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
                
            <div class="mb-5 col-4">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea type="text" id="description" name="description" class="form-control"> </textarea>
            </div>

            <div class="mb-5 col-4">
                <label for="thumb" class="form-label">Anteprima:</label>
                <input type="text" id="thumb" name="thumb" class="form-control">
            </div>

            <div class="mb-5 col-4">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>

            <div class="mb-5 col-4">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series" class="form-control">
            </div>

            <div class="mb-5 col-4">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="text" id="sale_date" name="sale_date" class="form-control">
            </div>

            <div class="mb-3 col-4">
                <label for="type" class="form-label">Genere:</label>
                <input type="text" id="type" name="type" class="form-control">
            </div>

            <button type="submit" class="col-4 btn btn-success text-uppercase rounded-pill">Aggiungi</button>
        </form>
        
    </div>
    
    <div class="text-center">
        <img  class="comic-img rounded-pill" src="/img.jpg" alt="">
    </div>

@endsection
