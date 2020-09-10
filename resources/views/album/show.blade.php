@extends('layouts.layout')

@section('main_content')
  <div class="songView">

    @if (!empty($album->image->url))
      <div class="image">
        <img src="{{ $album->image->url }}" alt="image">
      </div>
    @endif

    <div class="details">
      <h1>{{ ($album->title) ?  $album->title : 'Not defined'}}</h1>
      <h4>Artista: {{ $album->artist }}</h4>
      <span>Anno: {{ $album->year }}</span>
    </div>

    @if (!$album->tags->isEmpty())
      <div class="tags">
        <h5>Tags:</h5>
        <ul>
          @foreach ($album->tags as $tag)
            <li>#{{ $tag->tag_word }}</li>
          @endforeach
        </ul>
      </div>
    @endif

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
    <a href="{{ route('album.edit', $album) }}">Modifica</a>
  </div>


@endsection
