<?php

namespace Database\Factories;
use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{

    //linea importnte para hacer el HAS MANY Y BELONGS TO
    protected $model = Carrera::class; // Asegúrate de que esta línea esté correcta
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCarrera' =>fake()->unique()->bothify('###???????'),
            'nombreCarrera' =>fake()->unique()->words(5, true),
            'nombreMediano' =>fake()->unique()->word(),
            'nombreCorto' =>fake()->unique()->lexify('?????'),
            'depto_id' => Depto::factory(),
            // 'depto_id' => Depto::inRandomOrder()->first()->id, // Selecciona un ID de depto aleatorio
            

        ];
    }
}
