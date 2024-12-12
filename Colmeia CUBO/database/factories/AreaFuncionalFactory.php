<?php

namespace Database\Factories;

use App\Models\AreaFuncional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AreaFuncional>
 */
class AreaFuncionalFactory extends Factory
{
    protected $model = AreaFuncional::class;

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
            'area_de_conhecimento_id' => fake()->numberBetween(1, 5),
        ];
    }
}
