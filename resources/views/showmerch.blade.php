
<link rel="stylesheet" href="{{ asset('css/cardview.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />

@include('partials.hero')



    <a href="/store" class="back-btn">
        <i class="back-icon"></i> Back
    </a>
    {{-- //title , date, image, price, genre, description --}}

    <section class="merch-details">
        <div class="merch-info">
            <br>
            <br>
            <h2>Name: {{ $merch->name}}</h2>
            <p>Type: {{ $merch->type }}</p>
            {{-- <img src="{{ asset($merch->image) }}" alt="Merch Cover"> --}}
            <img src="{{ asset('products/'.$merch->image) }}" class="product-image">

            <p>Size: {{ $merch->size }}</p>
            <p>Price: {{ $merch->price }}</p>
            <p>Stock: {{ $merch->stock }}</p>
            <p>Description: {{ $merch->description }}</p>
            <p></p>Availability: {{ $merch->availability == 1 ? 'In stock' : 'Out of stock' }}</p>
            <p>Release Date: {{ $merch->release_date }}</p>
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

