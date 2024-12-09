<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricosTable extends Migration
{
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maquina_id');
            $table->string('nome_operador');
            $table->string('curso');
            $table->date('data');
            $table->time('horario');
            $table->boolean('troca_oleo_lubrificacao')->default(false);
            $table->boolean('troca_oleo_refrigeracao')->default(false);
            $table->boolean('troca_oleo_pneumatico')->default(false);
            $table->boolean('utilizacao')->default(true);
            $table->timestamps();

            // Relacionamento com a tabela de máquinas
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historicos');
    }
}