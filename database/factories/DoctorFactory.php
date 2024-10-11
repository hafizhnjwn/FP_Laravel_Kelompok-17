<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'speciality' => fake()->randomElement(['Cardiology', 'Neurology', 'Gynecology', 'Rheumathology', 'Ophthalmologists', 'Psychiatrists', 'Radiologists', 'Urologists', 'Hematologists']),
            'room' => fake()->numberBetween(0, 20)
        ];
    }
}
