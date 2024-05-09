@extends('admin.layout.app')

@section('content')
<style>
    /* CSS to make buttons appear horizontally */

    .button-cell {
        display: flex; /* Use flexbox layout */
        align-items: center; /* Center the buttons vertically */
        justify-content: flex-start;
        /* height: 10px; */
        border: none;
    }

    /* Add spacing between buttons */
    .button-cell button {
        margin-right: 5px; /* Adjust as needed */
    }
    .row {
        margin-bottom: 30px;
    }
    .card {
        padding: 20px;
        border-radius: 10px;
        box-shadow: #0000001a 0px 1px 3px;
        /* background-attachment: ; */
        /* background-color: #000000; */
    }

    /* Style for table */
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 14px;
        text-align: left;
        border: 1px solid #000000;
        height: 100px;

        /* border-block: 1px solid #000000; */
    }

    .table th {
        background-color: #a8a8a8ad;
        font-weight: bold;
    }

    .table tr:hover {
        background-color: #f1f1f1;


    }
    .btn-success {
            background-color: #28a745;
            height: 80px;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }

        .btn-success:before, .btn-success:after {
            content: "";
            position: absolute;
            width: 4px;
            height: 18px;
            background-color: white;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn-success:before {
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .btn-success:hover {
            background-color: #218838;
            box-shadow: 0 0 10px 0 rgb(0, 0, 0); /* Adjust the values for your preferred glow effect */
            height: 80px;
        }

        .btn-success:hover:before, .btn-success:hover:after {
            background-color: white;
        }

    /* Style for action buttons */
    .btn-primary,
    .btn-danger {
        padding: 9px 12px;
        border-radius: 4px;
        font-size: 14px;
        margin-right: 8px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
    }

    /* Style for image */
    .product-image {
        max-height: 100px;
        border-radius: 4px;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products List</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ count($merches) }}</h3>
                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="text-right">
                    <a href="/admin/products/create" class="btn btn-success">Add New Product</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid"> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Stock</th>
                                    <th>Description</th>
                                    <th>Availability</th>
                                    <th>Release Date</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($merches as $merch)
                                <tr class="{{ strtolower($merch->type) }}">
                                    <td>{{ $merch->type }}</td>
                                    <td>{{ $merch->name }}</td>
                                    <td>{{ $merch->size }}</td>
                                    <td>{{ $merch->stock }}</td>
                                    <td>{{ $merch->description }}</td>
                                    <td>{{ $merch->availability == 1 ? 'In stock' : 'Out of stock' }}</td>
                                    <td>{{ $merch->release_date }}</td>
                                    <td><img src="{{ asset('Images/merchs/'.strtolower($merch->type).'.jpg') }}" class="product-image"></td>
                                    <td>{{ $merch->price }}</td>
                                    <td class="button-cell">
                                        <a href="/admin/products/{{ $merch->id }}/edit" class="btn btn-primary">Update</a>
                                        <form action="/admin/products/{{ $merch->id }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</section>
<!-- /.content -->

@endsection

@section('customJs')

<script>
    console.log('Hello from customJs');
</script>
@endsection
