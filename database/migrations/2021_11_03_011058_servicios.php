<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_por_cliente', function (Blueprint $table) {
            $table->id('codigoServicio');
            $table->unsignedBigInteger('codigoCliente');
            $table->integer('codigoContador');
            $table->date('fechaRevision');
            $table->date('fechaCorte');
            $table->double('promedioConsumo');
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
        Schema::dropIfExists('clientes');
    }
}
