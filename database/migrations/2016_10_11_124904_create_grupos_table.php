<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

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
        Schema::dropIfExists('grupos');
    }
}
