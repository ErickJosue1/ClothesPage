<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private static $order = 1;

    public function run()
    {


        for ($i = 0; $i < 20; $i++) {
            ProductImage::factory()->create([
                'product_id' => self::$order++,
                'path' =>  storage_path(),
                'url' => fake()->imageUrl(), // Esto generará una URL de imagen falsa
                'mime' => fake()->mimeType(),
                'size' => fake()->numberBetween(10000, 5000000),
            ]);
        }
    }
}
