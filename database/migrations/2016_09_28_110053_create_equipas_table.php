<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('victorias')->nullable();
            $table->integer('empates')->nullable();
            $table->integer('derrotas')->nullable();
            $table->integer('golosMarcados')->nullable();
            $table->integer('golosSofridos')->nullable();
            $table->string('descricao');

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
        Schema::dropIfExists('equipas');
    }
}
