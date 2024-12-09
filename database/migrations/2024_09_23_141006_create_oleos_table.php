<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOleosTable extends Migration
{
    public function up()
    {
        Schema::create('oleos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oleos');
    }
}