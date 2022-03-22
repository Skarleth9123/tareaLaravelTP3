<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\PagoServicio;
use App\Models\ServicioCliente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory(500)->create();
        ServicioCliente::factory(500)->create();
        PagoServicio::factory(500)->create();
    }
}
