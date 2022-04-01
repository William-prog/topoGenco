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


            $table->string('transporteNumeroEmpleado');
            $table->string('transporteNombre');
            $table->string('transporteTipoServicio');
            $table->string('transporteHoraEntrada');
            $table->string('transporteNivelTrabajoEntrada');
            $table->date('transporteFechaRegistro');
            $table->string('transporteEncargado');
            $table->string('transporteNumOperador');
            $table->string('transporteNomOperador');

            
            $table->string('transporteTurno');
            $table->double('transporteHorometroInicio');
            $table->double('transporteHorometroFinal');
            $table->double('transporteHorometroResultado');



            $table->text('transporteObservaciones');
           
            

            $table->string('transporteHoraSalida');
            $table->string('transporteNivelTrabajoSalida');

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
