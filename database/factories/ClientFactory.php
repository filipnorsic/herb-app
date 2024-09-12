<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $users = User::all()->pluck('id')->toArray();

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'height' => fake()->numberBetween(150, 200),
            'sex' => fake()->randomElement(['M', 'F']),
            "user_id" => fake()->randomElement($users),
        ];
    }
}
