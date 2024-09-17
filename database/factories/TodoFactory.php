<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'titulo' => $this->faker->sentence(1),
            'descripcion' => $this->faker->sentence(4),
            'completado' => $this->faker->boolean(),
            'fecha_limite' => $this->faker->date(),
            'proyecto_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
