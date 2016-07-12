<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalificaPelicula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaPeliculas', function (Blueprint $table) {
            $table->increments('idPelicula');
            $table->increments('idUser');
            $table->string('opinion');
            $table->timestamps();
            $table->foreign('idPelicula')->references('id')->on('pelicula');
            $table->foreign('idUsuario')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calificaPeliculas');
    }
}
