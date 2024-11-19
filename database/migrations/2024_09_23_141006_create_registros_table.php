<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maquina_id')->constrained('maquinas')->onDelete('cascade');
            $table->date('data');
            $table->time('horario');
            $table->string('nome_operador');
            $table->string('nome_curso');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registros');
    }
}