<link rel="stylesheet" href="{{ asset('css/cardview.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />


@include('partials.hero')

<section class="album-section">

    <h2 class="music-header">Music</h2>
    <div class="album-container">
        @foreach ($musics as $music)
        <a href="/store/albums/{{$music->id}}">
    <div class="album-card">

            <div>
                <strong>{{$music->album_title}}</strong>
            </div>
            <img src="{{ asset($music->album_image) }}" height="300">
            <div>
                <span>{{$music->album_price}}</span>
                <button role="button">Add to Cart</button>
            </div>



    </div></a>

    @endforeach


    </div>


</section>

<section class="merch-section">
    <h2 class="merch-header">Merch</h2>
    <div id="productButtons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="t-shirt">T-shirt</button>
        <button class="filter-btn" data-filter="hoodie">Hoodie</button>
        <button class="filter-btn" data-filter="mug">Mugs</button>
        <button class="filter-btn" data-filter="hat">Hats</button>
        <button class="filter-btn" data-filter="poster">Posters</button>

    </div>

    <div id="products">
        <!-- Your products go here, each with a class indicating its category -->
        {{-- T-Shirts --}}
    <h3>T-Shirts</h3>
    <div class="merch-type">

        @foreach ($merches as $merch)
        <div class="merch-item {{ strtolower($merch->type) }}"> <!-- Add dynamic class based on type -->
            <strong>{{$merch->name}}</strong>
            <span>{{$merch->size}}</span><br>
            {{-- <img src="{{ asset('Images/merchs/'.strtolower($merch->type).'.jpg') }}" height="300"> --}}
            <img src="{{ asset('products/'.$merch->image) }}" class="product-image" height="300">
            <span>{{$merch->price}}</span>

            <button role="button">Add to Cart</button>


        </div>
        @endforeach

    </div>

    </div>

    {{-- <script src="/js/filter.js"></script> --}}
    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
        let current = document.getElementsByClassName('active');
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";

        const filter = this.getAttribute('data-filter');
        let products = document.querySelectorAll('#products .product');

        products.forEach(product => {
            if (filter === 'all' || product.classList.contains(filter)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
});

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
            // Remove active class from currently active button
            let current = document.querySelector('.filter-btn.active');
            if (current) {
                current.classList.remove('active');
            }
            this.classList.add('active');

            // Get the filter type from the clicked button
            const filter = this.getAttribute('data-filter');

            // Get all merch items
            let products = document.querySelectorAll('.merch-item');

            // Display or hide merch items based on filter
            products.forEach(product => {
                if (filter === 'all' || product.classList.contains(filter)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
});

    </script>




</section>


<section>
    <h2>Cart</h2>
    <div>
        <strong>ITEM</strong>
        &lt;&gt;
        <strong>PRICE</strong>
        &lt;&gt;
        <strong>QUANTITY</strong>
    </div>
    <div>
        <img src="{{ asset('Images/629569.jpg')}}" width="100">
        <span>T-Shirt</span>
        &lt;&gt;
        <strong>PRICE</strong>
        &lt;&gt;
        <input type="number" value="1">
        <button role="button">REMOVE</button>
    </div>
    <div>
        <img src="{{ asset('Images/636501.jpg')}}" width="100">
        <span>Album</span>
        &lt;&gt;
        <strong>PRICE</strong>
        &lt;&gt;
        <input type="number" value="1">
        <button role="button">REMOVE</button>
    </div>
    <hr>
    <div>
        <strong>Total</strong>
        <span>$18</span>
    </div>
    <div>
        <button role="button">PURCHASE</button>
    </div>
</section>

@include('partials.footer')
