<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->paragraph(),
            'foto' => 'https://picsum.photos/1600/900',
            'tallas' => $this->faker->randomElement(['ch', 'md', 'gd']),
            'precio' => $this->faker->randomFloat(2, 1, 9999),
        ];
    }
}
