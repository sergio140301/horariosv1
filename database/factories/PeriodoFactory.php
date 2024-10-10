<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPeriodo' => fake()->unique()->bothify('P###'), 
            'periodo' => fake()->word() . ' ' . fake()->year, 
            'desCorta' => fake()->lexify('?????'), 
            'fechaIni' => fake()->date(), 
            'fechaFin' => fake()->date(), 
        ];
    }
}
