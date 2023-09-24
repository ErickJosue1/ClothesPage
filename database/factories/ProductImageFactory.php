<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private static $order = 1;

    

    public function definition()
    {

        
        return [
            'product_id' => self::$order++,
            'path' => UploadedFile::fake(),
            'url' => fake()->imageUrl(), // Esto generará una URL de imagen falsa
            'mime' => fake()->mimeType,
            'size' => fake()->numberBetween(10000, 5000000),
        ];
    }
}
