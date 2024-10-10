<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idDepto' => fake()->unique()->bothify('##'),
            'nombreDepto' => fake()->unique()->words('3', true),
            'nombreMediano' => fake()->unique()->word(),
            'nombreCorto' => fake()->unique()->lexify('?????'),
          
        ];
    }
}
