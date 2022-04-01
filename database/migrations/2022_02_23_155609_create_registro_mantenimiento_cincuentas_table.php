<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMantenimientoCincuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_mantenimiento_cincuentas', function (Blueprint $table) {
            $table->id();

            $table->string('mantenimientoEquipo');
            $table->string('mantenimientoMarca');
            $table->string('mantenimientoNumEco');
            $table->date('mantenimientoFecha');
            $table->string('mantenimientoTipo');
            $table->string('mantenimientoHorometro');
            $table->string('mantenimientoHorario');
            $table->string('mantenimientoTurno');

            $table->string('mtto_motorDiesel_1');
            $table->string('mtto_motorDiesel_2');
            $table->string('mtto_motorDiesel_3');
            $table->string('mtto_motorDiesel_4');
            $table->string('mtto_motorDiesel_5');
            $table->string('mtto_motorDiesel_6');
            $table->string('mtto_motorDiesel_7');
            $table->string('mtto_motorDiesel_8');
            $table->string('mtto_motorDiesel_9');
            $table->string('mtto_estructura_1');
            $table->string('mtto_estructura_2');
            $table->string('mtto_estructura_3');
            $table->string('mtto_lubricacion_1');
            $table->string('mtto_lubricacion_2');
            $table->string('mtto_sistemaHidraulico_1');
            $table->string('mtto_sistemaHidraulico_2');
            $table->string('mtto_frenos_1');
            $table->string('mtto_frenos_2');
            $table->string('mtto_frenos_3');
            $table->string('mtto_frenos_4');
            $table->string('mtto_trenFuerza_1');
            $table->string('mtto_trenFuerza_2');
            $table->string('mtto_trenFuerza_3');
            $table->string('mtto_trenFuerza_4');
            $table->string('mtto_trenFuerza_5');
            $table->string('mtto_trenFuerza_6');
            $table->string('mtto_trenFuerza_7');
            $table->string('mtto_trenFuerza_8');
            $table->string('mtto_trenFuerza_9');
            $table->string('mtto_sistemaElectrico_1');
            $table->string('mtto_sistemaElectrico_2');
            $table->string('mtto_sistemaElectrico_3');

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
        Schema::dropIfExists('registro_mantenimiento_cincuentas');
    }
}
