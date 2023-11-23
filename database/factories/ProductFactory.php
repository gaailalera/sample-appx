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
            'controlNumber' => fake()->name(),
            'sourceofmail' => fake()->company(),
            'subjectMatter' => fake()->randomElement(),
            'statuss' => fake()->randomElement(),
            'actionUnit' => fake()->randomElement(),
            'dateReleased' => fake()->date(),
            'nameofpersonnel' => fake()->randomElement(),
            'initialReceived' => fake()->word(),
            'trackingNumber' => fake()->address(),

        ];
    }
}
