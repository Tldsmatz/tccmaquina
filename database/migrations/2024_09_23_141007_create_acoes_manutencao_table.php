<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcoesManutencaoTable extends Migration
{
    public function up()
    {
        Schema::create('acoes_manutencao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_id')->constrained();
            $table->string('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acoes_manutencao');
    }
}
