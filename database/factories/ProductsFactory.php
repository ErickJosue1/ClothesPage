<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $genre = ['Hombre', 'Mujer', 'Niños'];
    private static $category = ['Camisas', 'Pantalones', 'Calzado'];
    private static $title = ['T-shirt', 'Jeans', 'zapatos'];


    public function definition()
    {

        $randomNumber = fake()->randomFloat(0, 0, 2);
        
        return [
            'title' => self::$title[$randomNumber] . ' ' . fake()->cityPrefix(),
            'description' => fake()->realText(100),
            'price' => fake()->randomFloat(2, 100, 1200),
            'quantity' => fake()->randomFloat(2, 5, 100),
            'genre' => self::$genre[$randomNumber],
            'category' => self::$category[fake()->randomFloat(0, 0, 2)],
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
