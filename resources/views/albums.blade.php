    <link rel="stylesheet" href="{{ asset('css/albums.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    @include('partials.hero')
    <div class="album-container">
        @foreach ($albums as $album)
        <a href="/albums/{{$album->id}}">
            <div class="album-card">
                <div class="album-inner">
                    <div class="album-front">
                        <img src="{{ asset($album->album_image) }}" height="300">
                    </div>
                    <div class="album-back">
                        <div class="album-back-content">
                            <h1>{{$album->album_title}}</h1>
                            {{-- <p>{{$music->album_description}}</p> --}}


            <p>{{ $album->album_genre }}</p>
            <p>{{ $album->album_date }}</p>
            {{-- <h3>Songs:</h3>
            <ul>
                @foreach($album->songs as $song)
                    <li>{{ $song->song_name }} - {{ $song->song_duration }}</li>
                @endforeach
            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>


