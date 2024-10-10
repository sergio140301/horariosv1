<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noctrl' => fake()->unique()->numerify('2024####'), //nuevo campo
            'nombre' => fake()->firstName(),
            'apellidop' => fake()->lastName(),
            'apellidom' => fake()->firstName(), //nuevo campo
            'sexo' => fake()->randomElement(['M', 'F']), //nuevo campo
            'email' => fake()->unique()->safeEmail(),
            'carrera_id' => Carrera::inRandomOrder()->first()->id, // nuevo campo
           
            
        ];
    }
}
