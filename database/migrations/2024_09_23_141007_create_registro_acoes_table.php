<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroAcoesTable extends Migration
{
    public function up()
    {
        Schema::create('registro_acoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_id')->constrained('registros')->onDelete('cascade');
            $table->foreignId('acao_manutencao_id')->constrained('acoes_manutencao')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registro_acoes');
    }
}