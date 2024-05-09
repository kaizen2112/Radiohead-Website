@extends('admin.layout.app')

@section('content')
<style>
    /* CSS to make buttons appear horizontally */
.button-cell {
    display: flex; /* Use flexbox layout */
    align-items: center; /* Center the buttons vertically */
}

/* Optional: Add some spacing between the buttons */
.button-cell button {
    margin-right: 5px; /* Adjust as needed */
}

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tours</h1>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box card">
                    <div class="inner">
                        {{-- <h3>15</h3> --}}
                        <h3>{{ count($tours) }}</h3>
                        <p>Upcoming tours</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tour title</th>
                                    <th>Tour date</th>
                                    <th>Tour description</th>
                                    <th>Ticket price</th>
                                    <th>Ticket stock</th>
                                    <th>Location</th>
                                    <th>Venue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tours as $tour)
                                <tr>


                                    <td>{{ $tour->tour_title }}</td>
                                    <td>{{ $tour->tour_date }}</td>
                                    <td>{{ $tour->tour_description }}</td>
                                    <td>{{ $tour->ticket_price }}</td>
                                    <td>{{ $tour->ticket_stock }}</td>

                                    <td>
                                        {{-- {{ $merch->availability == 1 ? 'In stock' : 'Out of stock' }} --}}
                                        {{ $tour->location}}
                                    </td>
                                    <td>{{ $tour->theatre }}</td>
                                    {{-- <td><img src="{{ asset('Images/merchs/'.strtolower($merch->type).'.jpg') }}" height="100"></td> --}}
                                    <td class="button-cell">
                                        <button class="btn btn-primary" role="button">Update</button>
                                        <button class="btn btn-danger" role="button">Delete</button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

@endsection

@section('customJs')

<script>
    console.log('Hello from customJs');
</script>
@endsection
