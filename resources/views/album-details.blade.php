
{{-- //album-details.blade.php --}}
<div class="album-detail-container">
    <h1>{{ $album->album_title }}</h1>
    <img src="{{ asset($album->album_image) }}" height="300">
    <p>{{ $album->album_description }}</p>
    <p>Price: {{ $album->album_price }}</p>
    <h3>Songs:</h3>
    <ul>
        @foreach($album->songs as $song)
            <li>{{ $song->song_name }} - {{ $song->song_duration }}</li>
        @endforeach
    </ul>
</div>


  <style>
    * {
        background: black;
    }
    ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
        color: white;
    }
    li{
        color: white;}
  </style>
