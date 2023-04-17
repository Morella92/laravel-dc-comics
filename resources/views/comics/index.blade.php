@extends('layouts.app')

@section('content')

  <div class="container">
    <table>
      <thead>
        <tr>
          <th>Titolo</th>
          <th>Descrizione</th>
          <th>Anteprima</th>
          <th>Prezzo</th>
          <th>Serie</th>
          <th>Data di uscita</th>
          <th>Genere</th>
          <th>Dettagli</th>
        </tr>
      </thead>
      <tbody>
        @foreach($comics as $comic)
          <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td><img src="{{ $comic->thumb }}" alt="" width="100"></td>
            <td class="price">{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td><a href="{{ route('comics.show', $comic) }}">Vai ai dettagli</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection