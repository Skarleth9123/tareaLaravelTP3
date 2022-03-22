<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagoServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_servicio', function (Blueprint $table) {
            $table->id('codigoRecibo');
            $table->unsignedBigInteger('codigoCliente');
            $table->double('actualConsumo');
            $table->double('anteriorConsumo');
            $table->date('fechaMedicion');
            $table->double('pago');
            $table->char('estado',1);
            $table->timestamps();
            $table->foreign("codigoCliente")
            ->references("codigoCliente")
            ->on("clientes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos_servicio');
    }
}
