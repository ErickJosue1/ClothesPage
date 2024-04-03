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
    private static $category = ['Estetoscopio', 'Laringoscopio', 'Otros'];
    private static $title = ['Estetoscopio', 'Laringoscopio', 'Estetoscopio'];


    public function definition()
    {

        $randomNumber = fake()->randomFloat(0, 0, 2);
        
        return [
            'title' => self::$title[$randomNumber] . ' ' . fake()->cityPrefix(),
            'description' => fake()->realText(100),
            'color' => fake()->colorName(),
            'size' =>  fake()->randomFloat(0, 2, 10),
            'price' => fake()->randomFloat(2, 100, 1200),
            'quantity' => fake()->randomFloat(2, 5, 100),
            'category' => self::$category[$randomNumber],
            'type'   => fake()->word(),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
