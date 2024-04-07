<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />


@include('partials.hero')

<section>
    <h2>Music</h2>
    <div>
        <div>
            <strong>OK Computer</strong>
        </div>
        <img src="{{ asset('Images/album-covers/OK Computer.jpg') }}" height="300">
        <div>
            <span>$10</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>In Rainbows</strong>
        </div>
        <img src="{{ asset('Images/album-covers/In Rainbows.jpg') }}" height="300">
        <div>
            <span>$10</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>The Bends</strong>
        </div>
        <img src="{{ asset('Images/album-covers/The Bends.jpg') }}" height="300">
        <div>
            <span>$10</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>Pablo Honey</strong>
        </div>
        <img src="{{ asset('Images/album-covers/Pablo Honey.jpg') }}" height="300">
        <div>
            <span>$10</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>   
</section>

<section>
    <h2>Merch</h2>
    <div>
        <div>
            <strong>T-Shirt</strong>
        </div>
        <img src="{{ asset('Images/merchs/Tshirt.jpg')}}" height="250">
        <div>
            <span>$8</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>Mug</strong>
        </div>
        <img src="{{ asset('Images/merchs/Mug.jpg')}}" height="250">
        <div>
            <span>$8</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>Hoodie</strong>
        </div>
        <img src="{{ asset('Images/merchs/Hoodie.jpg')}}" height="250">
        <div>
            <span>$10</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
    <div>
        <div>
            <strong>Cap</strong>
        </div>
        <img src="{{ asset('Images/merchs/Cap.jpg')}}" height="250">
        <div>
            <span>$7</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
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
