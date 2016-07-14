<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalificaPeliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaPeliculas', function (Blueprint $table) {
            $table->integer('idPelicula')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->integer('calificacion');
            $table->foreign('idPelicula')->references('id')->on('peliculas')->onDelete('cascade');
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::drop('calificaPeliculas');
    }
}

