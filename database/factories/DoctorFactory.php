<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Specialty;
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
            'specialty_id' => Specialty::factory(),
            'room' => fake()->numberBetween(0, 20),
            'image' => fake()->randomElement(['1701272967.jpg','1701437997.jpg','1701437608.jpg','1701437692.jpg'])
            //'name' => fake()->unique()->randomElement(['Cardiology', 'Neurology', 'Gynecology', 'Rheumathology', 'Ophthalmologists', 'Psychiatrists', 'Radiologists', 'Urologists', 'Hematologists']),
        ];
    }
}
