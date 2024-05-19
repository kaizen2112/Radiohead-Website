
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

.merch-details {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    border-radius: 10px;
}

.merch-info {
    margin: 20px 0;
}

.merch-info h2 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #333;
}

.merch-info p {
    margin: 10px 0;
    font-size: 1.1em;
    color: #555;
}

.product-image {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 20px 0;
    border-radius: 10px;
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
}

button[role="button"]:hover {
    background-color: #555;
}

@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    .merch-info h2 {
        font-size: 1.5em;
    }

    .merch-info p {
        font-size: 1em;
    }

    button[role="button"] {
        width: 100%;
        padding: 15px;
    }
}

</style>
