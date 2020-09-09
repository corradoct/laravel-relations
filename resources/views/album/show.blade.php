<h1>Titolo: {{ $album->title }}</h1>
<h4>Artista: {{ $album->artist }}</h4>
<span>Anno: {{ $album->year }}</span>

<h2>Canzoni:</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>Titolo: {{ $song->title }} - Genere: {{ $song->genre }} - Durata: {{ $song->duration }}</li>
  @endforeach
</ul>
