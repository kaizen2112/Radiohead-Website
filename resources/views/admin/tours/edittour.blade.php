<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tour</title>
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
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Tour</h2>
            <p class="mb-4">Update the details of the tour below</p>
        </header>

        <form method="POST" action="/admin/tours/{{ $tour->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="tour_title" class="inline-block text-lg mb-2">Tour Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tour_title" value="{{ old('tour_title', $tour->tour_title) }}" />
                @error('tour_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tour_description" class="inline-block text-lg mb-2">Tour Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="tour_description" rows="10" placeholder="Include details about the tour">{{ old('tour_description', $tour->tour_description) }}</textarea>
                @error('tour_description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="ticket_price" class="inline-block text-lg mb-2">Ticket Price ($)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ticket_price" value="{{ old('ticket_price', $tour->ticket_price) }}" />
                @error('ticket_price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="ticket_stock" class="inline-block text-lg mb-2">Ticket Stock</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ticket_stock" value="{{ old('ticket_stock', $tour->ticket_stock) }}" />
                @error('ticket_stock')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tour_date" class="inline-block text-lg mb-2">Tour Date</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="tour_date" value="{{ old('tour_date', $tour->tour_date) }}" />
                @error('tour_date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tour_image" class="inline-block text-lg mb-2">Tour Image</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="tour_image" />
                @error('tour_image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{ old('location', $tour->location) }}" />
                @error('location')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="theatre" class="inline-block text-lg mb-2">Theatre</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="theatre" value="{{ old('theatre', $tour->theatre) }}" />
                @error('theatre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:bg-black hover:text-white glow1">
                    Update Tour
                </button>
                <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-500 hover:text-white glow2">
                    <a href="/admin/tours" class="text-white">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
