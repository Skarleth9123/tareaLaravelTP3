<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\ServicioCliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioClienteFactory extends Factory
{
    protected $model=ServicioCliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigoCliente' => Cliente::all()->random()->codigoCliente,
            'codigoContador' => $this->faker->numerify('########') ,
            'fechaRevision' => $this->faker->date,
            'fechaCorte' => $this->faker->date,
            'promedioConsumo' => $this->faker->randomFloat,
        ];
    }

}
