<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMantenimientoCientoCincuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_mantenimiento_ciento_cincuentas', function (Blueprint $table) {
            $table->id();

            $table->string('mantenimientoEquipo');
            $table->string('mantenimientoMarca');
            $table->string('mantenimientoNumEco');
            $table->date('mantenimientoFecha');
            $table->string('mantenimientoTipo');
            $table->string('mantenimientoHorometro');
            $table->string('mantenimientoHorario');
            $table->string('mantenimientoTurno');

            $table->string('mtto_limpiezaGeneral_1');
            $table->string('mtto_limpiezaGeneral_2');
            $table->string('mtto_limpiezaGeneral_3');

            $table->string('mtto_estructura_1');
            $table->string('mtto_estructura_2');

            $table->string('mtto_lubricacion_1');
            $table->string('mtto_lubricacion_2');

            $table->string('mtto_accionamiento_1');
            $table->string('mtto_accionamiento_2');
            $table->string('mtto_accionamiento_3');
            $table->string('mtto_accionamiento_4');

            $table->string('mtto_trenFuerza_1');
            $table->string('mtto_trenFuerza_2');
            $table->string('mtto_trenFuerza_3');
            $table->string('mtto_trenFuerza_4');
            $table->string('mtto_trenFuerza_5');

            $table->string('mtto_sistemaElectrico_1');
            $table->string('mtto_sistemaElectrico_2');

            $table->string('mtto_Observaciones');

            $table->string('mtto_Operador');
            $table->string('mtto_Verificador');
            $table->string('mtto_Encargado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_mantenimiento_ciento_cincuentas');
    }
}
