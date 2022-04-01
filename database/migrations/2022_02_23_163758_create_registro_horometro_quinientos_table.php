<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroHorometroQuinientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_horometro_quinientos', function (Blueprint $table) {
            $table->id();
            $table->date('fechaHorometro');
            $table->string('turnoHorometro');
            $table->double('inicialHorometro');
            $table->double('finalHorometro');
            $table->double('totalHorometro');
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
        Schema::dropIfExists('registro_horometro_quinientos');
    }
}
