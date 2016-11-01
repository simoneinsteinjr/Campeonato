<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolos1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golos_1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');

            $table->integer('jogador_id')->unsigned();
            $table->foreign('jogador_id')->references('id')->on('jogadores')
                ->onUpdated('cascade')
                ->onDelete('cascade');

            $table->integer('jogo_id')->unsigned();
            $table->foreign('jogo_id')->references('id')->on('jogos_1')
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
        Schema::dropIfExists('golos_1');
    }
}
