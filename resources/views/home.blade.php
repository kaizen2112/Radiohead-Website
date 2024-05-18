<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/body.css') }}" />


@include('partials.hero')
<div class="head">
    <br>
    <br>
    <h1 class="band-name band-name-large">Radiohead</h1>
    <br>
    <br>

    <div style="text-align: center;">
        <button class="special-btn"> Get Our Latest Albums <br><span class="arrow">&#9658;</span></button>
    </div>
</div>


<br>


<br>
<br>
<!-- Insert a background picture here -->
{{-- <button type="button">&#9658</button> --}}


<section>
    <h2 class="section-header">Upcoming Tours</h2>

    <div class="tour-item">
        @foreach ($tours as $tour)
        <a href="/tours/{{$tour->id}}">

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
        </a>
        @endforeach
    </div>
</section>

@include('partials.footer');

</body>

</html>
