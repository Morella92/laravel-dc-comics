@extends('layouts.app')

@section('content')

  <div class="container py-3">
    <table class="text-center py-3">
      <thead class="py-3 border text-uppercase">
        <tr>
          <th>Titolo</th>
          <th>Descrizione</th>
          <!-- <th>Anteprima</th> -->
          <th>Prezzo</th>
          <th>Serie</th>
          <th>Data di uscita</th>
          <th>Genere</th>
          <th>Dettagli</th>
          <th>Modifica</th>
        </tr>
      </thead>
      <tbody>
        @foreach($comics as $comic)
          <tr class="border">
            <td class="px-4">{{ $comic->title }}</td>
            <td class="p-4">{{ $comic->description }}</td>
            <!-- <td><img src="{{ $comic->thumb }}" alt="" width="100"></td> -->
            <td class="price px-4">{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td class="px-4">{{ $comic->sale_date }}</td>
            <td class="px-4">{{ $comic->type }}</td>
            <td class="px-4"><a href="{{ route('comics.show', $comic) }}">Vai ai dettagli</a></td>
            <td class="px-4">
              <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
              <form action="{{route('comics.destroy', $comic)}}" method="POST">
                @csrf 
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection