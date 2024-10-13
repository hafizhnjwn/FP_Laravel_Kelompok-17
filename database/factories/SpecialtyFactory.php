<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Cardiology', 'Neurology', 'Gynecology', 'Rheumathology', 'Ophthalmologists', 'Psychiatrists', 'Radiologists', 'Urologists', 'Hematologists']),
            'slug' => Str::slug(fake()->sentence(rand(2,2),false)),
        ];
    }
}
