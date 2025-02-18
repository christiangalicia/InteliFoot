<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->words(fake()->numberBetween(1, 4), true),
            'subtitulo' => fake()->words(fake()->numberBetween(2, 4), true),
            'slider' => 'https://picsum.photos/1600/900'
        ];
    }
}
