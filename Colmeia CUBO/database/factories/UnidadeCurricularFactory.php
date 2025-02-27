<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnidadeCurricular>
 */
class UnidadeCurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'duration' => fake()->numberBetween(1, 10),
            'area_funcional_id' => fake()->numberBetween(1, 5),
        ];
    }
}
