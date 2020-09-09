@extends('layouts.layout')

@section('main_content')
  <div class="songView">

    <div class="image">
      <img src="{{ $album->image->url }}" alt="image">
    </div>
    <div class="details">
      <h1>{{ $album->title }}</h1>
      <h4>Artista: {{ $album->artist }}</h4>
      <span>Anno: {{ $album->year }}</span>
    </div>

    <div class="songs">
      <h2>Canzoni:</h2>
      <div class="songsList">
        <ul>
          @foreach ($album->songs as $song)
            <li><span>Titolo:</span> {{ $song->title }} - <span>Genere:</span> {{ $song->genre }} - <span>Durata:</span> {{ $song->duration }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <a href="{{ route('album.index') }}">Indietro</a>
  </div>


@endsection
