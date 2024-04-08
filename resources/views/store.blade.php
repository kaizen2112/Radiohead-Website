<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />


@include('partials.hero')

<section>
    <h2>Music</h2>
    @foreach ($musics as $music)
    <div>
        <div>
            <strong>{{$music->album_title}}</strong>
        </div>
        <img src="{{ asset($music->album_image) }}" height="300">
        <div>
            <span>{{$music->album_price}}</span>
            <button role="button">Add to Cart</button>
        </div>
    </div>
        
    @endforeach
    
    
</section>

<section>
    <h2>Merch</h2>

    {{-- T-Shirts --}}
    <div class="merch-type">
        <h3>T-Shirts</h3>
        @foreach ($merches as $merch)
            @if ($merch->type === 'T-Shirt')
                <div class="merch-item">
                    <strong>{{$merch->name}}</strong>
                    <span>{{$merch->size}}</span><br>
                    <span>{{$merch->price}}</span>
                    <button role="button">Add to Cart</button>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Hoodies --}}
    <div class="merch-type">
        <h3>Hoodies</h3>
        @foreach ($merches as $merch)
            @if ($merch->type === 'Hoodie')
                <div class="merch-item">
                    <strong>{{$merch->name}}</strong>
                    <span>{{$merch->size}}</span><br>
                    <span>{{$merch->price}}</span>
                    <button role="button">Add to Cart</button>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Mugs --}}
    <div class="merch-type">
        <h3>Mugs</h3>
        @foreach ($merches as $merch)
            @if ($merch->type === 'Mug')
                <div class="merch-item">
                    <strong>{{$merch->name}}</strong>
                    <span>{{$merch->size}}</span><br>
                    <span>{{$merch->price}}</span>
                    <button role="button">Add to Cart</button>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Hats --}}
    <div class="merch-type">
        <h3>Hats</h3>
        @foreach ($merches as $merch)
            @if ($merch->type === 'Hat')
                <div class="merch-item">
                    <strong>{{$merch->name}}</strong>
                    <span>{{$merch->size}}</span><br>
                    <span>{{$merch->price}}</span>
                    <button role="button">Add to Cart</button>
                </div>
            @endif
        @endforeach
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
