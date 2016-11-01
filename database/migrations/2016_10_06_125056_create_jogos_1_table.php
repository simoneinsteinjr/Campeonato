<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogos1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos_1', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dataJogo');
            $table->string('situacao');
            $table->string('resultado');


            $table->integer('equipa_id')->unsigned();
            $table->foreign('equipa_id')->references('id')->on('equipas')
                ->onUpdated('cascade')
                ->onDelete('cascade');

            $table->integer('equipa1_id')->unsigned();
            $table->foreign('equipa1_id')->references('id')->on('equipas')
                ->onUpdated('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('jogos_1');
    }
}
