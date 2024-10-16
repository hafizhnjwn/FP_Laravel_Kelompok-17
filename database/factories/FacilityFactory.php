<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence()),
            'icon' => fake()->randomElement(['1701708290.png', '1728923341.png', '1729070720.png']),
            'description' => fake()->text(1000),
            'available' => fake()->boolean(),
        ];
    }
}
