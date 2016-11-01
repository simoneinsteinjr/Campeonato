<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('estado');

            $table->integer('campo_id')->unsigned();
            $table->foreign('campo_id')->references('id')->on('campos')
                ->onUpdated('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('calendarios');
    }
}
