<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/toursview.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('css/body.css') }}" /> --}}
@include('partials.hero')
<a href="/" class="back-btn">
    <i class="back-icon"></i> Back
</a>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $tour->tour_title }}</div>
                    <div class="card-body">
                        {{-- <img src="{{ asset($tour->tour_image) }}" alt="{{ $tour->tour_title }}" class="img-fluid mb-3"> --}}
                        {{-- <img src="tours/{{$tour->tour_image}}" class="tour-image"> --}}
                        <img src="{{ asset('tours/'.$tour->tour_image) }}" class="product-image" width="1000">
                        <div class="info">
                            <p class="des">{{ $tour->tour_description }}</p>
                        <p class="loc"><strong>Location:</strong> {{ $tour->location }}</p>
                        <p class="thea"><strong>Theatre:</strong> {{ $tour->theatre }}</p>
                        {{-- <p><strong>Date:</strong> {{ $tour->tour_date->format('M d, Y') }}</p> --}}
                        <p class="pri"><strong>Ticket Price:</strong> {{ $tour->ticket_price }}</p>
                        <p class="stck"><strong>Ticket Stock:</strong> {{ $tour->ticket_stock }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('partials.footer');

