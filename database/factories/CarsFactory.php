<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CarsFactory extends Factory
{
    protected $model = Cars::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->company,
            'category_id' => fake()->unique()->numberBetween(1, 10),
        ];
    }
}
