
<link rel="stylesheet" href="{{ asset('css/cardview.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />

@include('partials.hero')



    <a href="/store" class="back-btn">
        <i class="back-icon"></i> Back
    </a>
    {{-- //title , date, image, price, genre, description --}}

    <section class="album-details">
        <div class="album-info">
            <h2>{{ $music->album_title }}</h2>
            <p>Date: {{ $music->album_date }}</p>
            <img src="{{ asset($music->album_image) }}" alt="Album Cover">
            <p>Price: {{ $music->album_price }}</p>
            <p>Genre: {{ $music->album_genre }}</p>
            <p>Description: {{ $music->album_description }}</p>
        </div>
        <a href="{{route('order.create')}}"><button role="button">Add to Cart</button></a>

    </section>


    {{-- <section class="a">
        <h2 class="music-header">Music</h2>
        <div class="al">

                    <div class="alb">
                        <div>
                            <strong>{{$music->album_title}}</strong>
                        </div>
                        <img src="{{ asset($music->album_image) }}" height="300">
                        <div>
                            <span>{{$music->album_price}}</span>
                            <button role="button">Add to Cart</button>
                        </div>
                    </div>

                <p>No music albums found.</p> --}}

        </div>
    </section>

