
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
            <p><Strong>Date:</Strong> {{ $music->album_date }}</p>
            <img src="{{ asset($music->album_image) }}" alt="Album Cover">
            <p><Strong>Price:</Strong> {{ $music->album_price }}</p>
            <p><Strong>Genre:</Strong> {{ $music->album_genre }}</p>
            <p><Strong>Description:</Strong> {{ $music->album_description }}</p>
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
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

.header, .footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.back-btn {
    display: inline-block;
    margin: 20px 0;
    color: #333;
    text-decoration: none;
    font-size: 1.1em;
}

.back-btn:hover {
    text-decoration: underline;
}

.back-icon {
    margin-right: 5px;
}

.album-details {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    border-radius: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.album-info {
    flex: 2 1 500px; /* Allow the info section to take more space */
}

.album-info h2 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #333;
}

.album-info p {
    margin: 10px 0;
    font-size: 1.1em;
    color: #555;
}

.album-info img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    flex: 1 1 300px; /* Allow the image to take up to 300px of width */
    margin-bottom: 20px;
}

button[role="button"] {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1em;
    color: #fff;
    background-color: #333;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    margin-top: 20px;
}

button[role="button"]:hover {
    background-color: #555;
}

@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    .album-info {
        order: 1; /* Move info section above the image on smaller screens */
    }

    .album-info img {
        order: 2; /* Move image below the info section on smaller screens */
    }

    .album-info h2 {
        font-size: 1.5em;
    }

    .album-info p {
        font-size: 1em;
    }

    button[role="button"] {
        width: 100%;
        padding: 15px;
    }
}

</style>
