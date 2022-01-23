<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id('genre_id');
            $table->string('genre_name',255);
        });
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('movie_id');
            $table->engine = 'InnoDB';
            $table->foreign('genre_id')->references('genre_id')->on('genres');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->primary(['genre_id','movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
        Schema::dropIfExists('movie_genre');
    }
}
