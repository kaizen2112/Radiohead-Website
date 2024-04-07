<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

@include('partials.hero')

<hr>

<button type="button">Get Our Latest Album</button>
<br>
<br>
<!-- Insert a background picture here -->
<button type="button">&#9658</button>


    <section>
        <h2>Upcoming Tours</h2>


        <div>
            @foreach($tours as $tour)
           

            <div>
                <strong>{{$tour->tour_date}}</strong>
                &lt;&gt;
                <span>{{$tour->location}}</span>
                &lt;&gt;
                <span>{{$tour->theatre}}</span>
                &lt;&gt;
                <button type="button">Buy Tickets</button>
                <hr>
            </div>
        
        @endforeach
            

        </div>
    </section>
    
    @include('partials.footer');
    
</body>
</html>