<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
                  //->onDelete('cascade');
            $table->string('movie_title',255);
            $table->integer('movie_release_year');
            $table->integer('movie_runtime_minutes');
            $table->float('imdb_rating');
            $table->integer('metascore_rating');
            //$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP(1)');
            //$table->timestamp('created_at')->default('CURRENT_TIMESTAMP(2)');
          


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
