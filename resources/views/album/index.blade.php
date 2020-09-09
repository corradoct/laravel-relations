@extends('layouts.layout')

@section('main_content')
<div class="index">
  <h1>Album</h1>

  <div class="albums">

    <ul>
      @foreach ($albums as $album)
        <li>
          <a href="{{ route('album.show', $album) }}">
            <div class="image">
              <img src="{{ $album->image->url }}" alt="image">
              <h4>{{ $album->title }}</h4>
            </div>
          </a>
        </li>
      @endforeach
    </ul>

  </div>

  <a href="/">Home</a>
</div>


@endsection
