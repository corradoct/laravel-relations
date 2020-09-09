@foreach ($albums as $album)
  <li>
    <a href="{{ route('album.show', $album) }}">
      <img src="{{ $album->image->url }}" alt="image">
      <h4>{{ $album->title }}</h4>

    </a>
  </li>
@endforeach
