<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idReticula' => fake()->unique()->bothify('L######'), // Genera un idReticula único
            'Descripcion' => fake()->sentence(10), // Descripción de 10 palabras
            'fechaEnVigor' => fake()->dateTimeBetween('-1 year', '+1 year'), // Fecha en vigor aleatoria
            'carrera_id' => \App\Models\Carrera::inRandomOrder()->first()->id, // ID de carrera aleatorio
        ];
    }
}
