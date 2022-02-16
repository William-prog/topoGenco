<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCheckListVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_check_list_vehiculos', function (Blueprint $table) {
            $table->id();

            $table->date('checkListFecha');
            $table->string('checkListTurno');
            $table->double('checkListHorometro');

            $table->string('cl_Extintores_1');
            $table->string('cl_Extintores_2');
            $table->string('cl_Extintores_3');
            $table->string('cl_Extintores_4');
            $table->string('cl_Extintores_5');
            $table->string('cl_Extintores_6');
            $table->string('cl_Extintores_7');
            $table->string('cl_Extintores_8');
            $table->string('cl_Neumaticos_1');
            $table->string('cl_Neumaticos_2');
            $table->string('cl_Neumaticos_3');
            $table->string('cl_Niveles_1');
            $table->string('cl_Niveles_2');
            $table->string('cl_Niveles_3');
            $table->string('cl_Niveles_4');
            $table->string('cl_Niveles_5');
            $table->string('cl_Niveles_6');
            $table->string('cl_Elementos_1');
            $table->string('cl_Elementos_2');
            $table->string('cl_Elementos_3');
            $table->string('cl_Elementos_4');
            $table->string('cl_Elementos_5');
            $table->string('cl_Elementos_6');
            $table->string('cl_Elementos_7');
            $table->string('cl_Elementos_8');
            $table->string('cl_Elementos_9');
            $table->string('cl_Elementos_10');
            $table->string('cl_Elementos_11');
            $table->string('cl_Elementos_12');
            $table->string('cl_Elementos_13');
            $table->string('cl_Elementos_14');
            $table->string('cl_Elementos_15');
            $table->string('cl_Elementos_16');
            $table->string('cl_Elementos_17');
            $table->string('cl_Elementos_18');
            $table->string('cl_Elementos_19');
            $table->string('cl_Elementos_20');
            $table->string('cl_Elementos_21');
            $table->text('checkListObservaciones');

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
        Schema::dropIfExists('registro_check_list_vehiculos');
    }
}
