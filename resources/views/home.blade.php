<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/body.css') }}" />


@include('partials.hero')
<br>


<br>
<br>
<!-- Insert a background picture here -->
{{-- <button type="button">&#9658</button> --}}


<section>
    <h2 class="section-header">Upcoming Tours</h2>

    <div class="tour-item">
        @foreach ($tours as $tour)
        <div  class="tourspan">
            <div class="first-half">
                <div class="tourdateinfoouter">

                        <strong>{{ $tour->tour_date }}</strong>
                        &lt;&gt;
                        <span>{{ $tour->location }}</span>
                        &lt;&gt;
                        <span>{{ $tour->theatre }}</span>
                        &lt;&gt;

                </div>



                <div class="tourbtn">
                    <button type="button">Buy Tickets</button>

                </div>
            </div>
            <div class="second-half">
                <div class="tourinfo">
                    <h3>{{ $tour->tour_title }}</h3>
                    <p>{{ $tour->tour_description }}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</section>

@include('partials.footer');

</body>

</html>
