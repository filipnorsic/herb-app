<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measurement>
 */
class MeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = Client::all()->pluck('id')->toArray();

        return [
            'client_id' => fake()->randomElement($client),
            'weight' => fake()->numberBetween(50, 150),
            'body_fat' => fake()->numberBetween(10, 30),
            'muscle_mass' => fake()->numberBetween(30, 70),
            'water' => fake()->numberBetween(40, 70),
            'visceral_fat' => fake()->numberBetween(1, 20),
            'age' => fake()->numberBetween(18, 70),
            'basal_metabolism' => fake()->numberBetween(1000, 3000),

        ];
    }
}
