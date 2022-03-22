<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\PagoServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagoServicioFactory extends Factory
{
    protected $model=PagoServicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigoCliente' => $this->faker->unique()->numberBetween(1, Cliente::count()),
            'actualConsumo' => $this->faker->numerify('###.##') ,
            'anteriorConsumo' => $this->faker->numerify('###.##'),
            'fechaMedicion' => $this->faker->date,
            'pago' => $this->faker->randomFloat,
            'estado' => $this->faker->randomElement($array = array ('S','N')),
        ];
    }
}
