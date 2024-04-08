<?php

namespace Database\Seeders;

use App\Models\Merch;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $merch = collect([
            [
                'type' => 'T-Shirt',
                'name' => 'The Weeknd After Hours T-Shirt',
                'price' => 25.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Tee_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours T-Shirt',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20',

            ],
            [
                'type' => 'T-Shirt',
                'name' => 'The Weeknd Starboy T-Shirt',
                'price' => 25.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Tee_1_1024x,
                'description' => 'The Weeknd Starboy T-Shirt',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20',

            ],
            [
                'type' => 'T-Shirt',
                'name' => 'The Weeknd XO T-Shirt',
                'price' => 25.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/XO_Tee_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd XO T-Shirt',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20',

            ],
            [
                'type' => 'T-Shirt',
                'name' => 'The Weeknd Blinding Lights T-Shirt',
                'price' => 25.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Blinding_Lights_Tee_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Blinding Lights T-Shirt',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20',

            ],
            [
                'type' => 'T-Shirt',
                'name' => 'The Weeknd Heartless T-Shirt',
                'price' => 25.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Heartless_Tee_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Heartless T-Shirt',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Mug',
                'name' => 'The Weeknd After Hours Mug',
                'price' => 15.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Mug_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours Mug',

                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Mug',
                'name' => 'The Weeknd Starboy Mug',
                'price' => 15.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Mug_1_1024x,
                'description' => 'The Weeknd Starboy Mug',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Mug',
                'name' => 'The Weeknd XO Mug',
                'price' => 15.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/XO_Mug_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd XO Mug',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Mug',
                'name' => 'The Weeknd Blinding Lights Mug',
                'price' => 15.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Blinding_Lights_Mug_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Blinding Lights Mug',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Mug',
                'name' => 'The Weeknd Heartless Mug',
                'price' => 15.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Heartless_Mug_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Heartless Mug',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Poster',
                'name' => 'The Weeknd After Hours Poster',
                'price' => 10.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Poster_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours Poster',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Poster',
                'name' => 'The Weeknd Starboy Poster',
                'price' => 10.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Poster_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Starboy Poster',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Poster',
                'name' => 'The Weeknd XO Poster',
                'price' => 10.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/XO_Poster_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd XO Poster',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Poster',
                'name' => 'The Weeknd Blinding Lights Poster',
                'price' => 10.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Blinding_Lights_Poster_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Blinding Lights Poster',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Poster',
                'name' => 'The Weeknd Heartless Poster',
                'price' => 10.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Heartless_Poster_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Heartless Poster',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Vinyl',
                'name' => 'The Weeknd After Hours Vinyl',
                'price' => 35.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Vinyl_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours Vinyl',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Vinyl',
                'name' => 'The Weeknd Starboy Vinyl',
                'price' => 35.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Vinyl_1_102,
            ],
            [
                'type' => 'Hoodie',
                'name' => 'The Weeknd After Hours Hoodie',
                'price' => 50.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Hoodie_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours Hoodie',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Hoodie',
                'name' => 'The Weeknd Starboy Hoodie',
                'price' => 50.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Hoodie_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Starboy Hoodie',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'



            ],
            [
                'type' => 'Hoodie',
                'name' => 'The Weeknd XO Hoodie',
                'price' => 50.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/XO_Hoodie_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd XO Hoodie',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Hoodie',
                'name' => 'The Weeknd Blinding Lights Hoodie',
                'price' => 50.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Blinding_Lights_Hoodie_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Blinding Lights Hoodie',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Hoodie',
                'name' => 'The Weeknd Heartless Hoodie',
                'price' => 50.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Heartless_Hoodie_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Heartless Hoodie',
                'size' => 'S, M, L, XL',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Hat',
                'name' => 'The Weeknd After Hours Hat',
                'price' => 20.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/After_Hours_Hat_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd After Hours Hat',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Hat',
                'name' => 'The Weeknd Starboy Hat',
                'price' => 20.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Starboy_Hat_1_1024x,
                'description' => 'The Weeknd Starboy Hat',
                'release_date' => '2021-03-20'
            ],
            [
                'type' => 'Hat',
                'name' => 'The Weeknd XO Hat',
                'price' => 20.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/XO_Hat_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd XO Hat',
                'release_date' => '2021-03-20'

            ],
            [
                'type' => 'Hat',
                'name' => 'The Weeknd Blinding Lights Hat',
                'price' => 20.00,
                'stock' => 100,
                'availability' => true,
                // 'image' => 'https://cdn.shopify.com/s/files/1/0012/4957/4961/products/Blinding_Lights_Hat_1_1024x1024.jpg?v=1583780134',
                'description' => 'The Weeknd Blinding Lights Hat',
                'release_date' => '2021-03-20'
            ]



            ]);

        $merch->each(function($merch) {
            Merch::create($merch);
        });
    }
}
