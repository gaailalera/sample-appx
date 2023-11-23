<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'profession' => fake()->randomElement(),
            'contactNumber' => fake()->phoneNumber(),
            'srfNumber' => fake()->address(),
            'status' => fake()->lastName(),
            'datesent' => fake()->date(),
        ];
    }
}
