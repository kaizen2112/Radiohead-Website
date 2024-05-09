<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Product</h2>
            <p class="mb-4">Update the details of the product below</p>
        </header>

        <form method="POST" action="/admin/products/{{ $merch->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="type" class="inline-block text-lg mb-2">Product Type</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="type" value="{{ old('type', $merch->type) }}" />
                @error('type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Product Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{ old('name', $merch->name) }}" />
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">Price per unit ($)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price" value="{{ old('price', $merch->price) }}" />
                @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="stock" class="inline-block text-lg mb-2">Product Stock</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="stock" value="{{ old('stock', $merch->stock) }}" />
                @error('stock')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="availability" class="inline-block text-lg mb-2">Product Availability</label>
                <input type="checkbox" class="border border-gray-200 rounded p-2 w-full" name="availability" value="1" {{ old('availability', $merch->availability) ? 'checked' : '' }} />
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Product Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include details about the product">{{ old('description', $merch->description) }}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="size" class="inline-block text-lg mb-2">Product Size</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="size" value="{{ old('size', $merch->size) }}" />
                @error('size')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="release_date" class="inline-block text-lg mb-2">Release Date</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="release_date" value="{{ old('release_date', $merch->release_date) }}" />
                @error('release_date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:bg-black hover:text-white glow1">
                    Update Product
                </button>
                <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-500 hover:text-white glow2">
                    <a href="/admin/products" class="text-white">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
