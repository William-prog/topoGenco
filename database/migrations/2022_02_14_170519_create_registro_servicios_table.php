<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_servicios', function (Blueprint $table) {
            $table->id();
            
            $table->string('idForanea');
            $table->string('codigoIdentificador');
            $table->date('fechaRegistro');
            $table->string('turno');
            $table->double('horometroIni');
            $table->double('horometroFin');
            $table->double('horometroRes');
            
            $table->string('tipoServicio');

            $table->string('numeroEmpleado');
            $table->string('nombre');
            // $table->string('empresa');
            $table->string('horaEntrada');
            $table->string('nivelTrabajo');
            $table->text('observaciones');
            $table->string('encargado');
            $table->string('numOperador');
            $table->string('nomOperador');

            // $table->string('verifico');
            // $table->string('recibeTurno');

            $table->string('horaSalida');
            $table->string('nivelTrabajoS');

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
        Schema::dropIfExists('registro_servicios');
    }
}
