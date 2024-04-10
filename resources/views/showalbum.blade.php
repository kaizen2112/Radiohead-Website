
<link rel="stylesheet" href="{{ asset('css/cardview.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/store.css') }}" />
    
@include('partials.hero')

    
    
    <a href="/store" class="back-btn">
        <i class="back-icon"></i> Back 
    </a>

    <section class="album-section">
        <h2 class="music-header">Music</h2>
        <div class="album-container">
            
                    <div class="album-card">
                        <div>
                            <strong>{{$music->album_title}}</strong>
                        </div>
                        <img src="{{ asset($music->album_image) }}" height="300">
                        <div>
                            <span>{{$music->album_price}}</span>
                            <button role="button">Add to Cart</button>
                        </div>
                    </div>
                
                {{-- <p>No music albums found.</p> --}}
           
        </div>
    </section>

                