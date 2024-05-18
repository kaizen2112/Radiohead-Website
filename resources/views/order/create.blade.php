{{-- <x-orderfile> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlist a Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add glow effect on hover */
        .glow1:hover {
          box-shadow: 0 0 10px 0 rgb(26, 135, 10); /* Adjust the values for your preferred glow effect */
        }
        .glow2:hover {
          box-shadow: 0 0 10px 0 rgb(135, 10, 26); /* Adjust the values for your preferred glow effect */
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <div class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Order a product</h2>
            <p class="mb-4">Fill out the form below to order a product</p>
        </header>

<form method="POST" action="/order/store" enctype="multipart/form-data">
            @csrf

<div class="mb-6">
    <label for="type" class="inline-block text-lg mb-2">Your Name</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{ old('name') }}" />
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="name" class="inline-block text-lg mb-2">Product Name</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="product_name" value="{{ old('product_name') }}" />
    @error('product_name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="price" class="inline-block text-lg mb-2">Product Quantity</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="product_quantity" value="{{ old('product_quantity') }}" />
    @error('product_quantity')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="stock" class="inline-block text-lg mb-2">Your Email</label>
    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
    @error('email')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="availability" class="inline-block text-lg mb-2">Your Phone Number</label>
    <input type="number" class="border border-gray-200 rounded p-2 w-full" name="phone_number" value="{{old('phone_number')}}" />
</div>





<div class="mb-6">
    <label for="size" class="inline-block text-lg mb-2">Your Location</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{ old('location') }}" />
    @error('location')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>



<div class="mb-6">
    <button class="bg-black text-white rounded py-2 px-4 hover:bg-black hover:text-white glow1">
        Order Product
    </button>
    <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-500 hover:text-white glow2">
        <a href="/admin/products" class="text-white">Cancel</a>
    </button>
</div>
        </form>
    </div>
</body>
</html>
{{-- </x-orderfile> --}}
