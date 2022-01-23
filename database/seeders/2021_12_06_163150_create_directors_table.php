<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id('director_id');
            $table->string('first_name',100);
            $table->string('last_name',100);
        });
        Schema::create('movie_director', function (Blueprint $table) {
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('movie_id');
            $table->engine = 'InnoDB';
            $table->foreign('director_id')->references('director_id')->on('directors');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->primary(['director_id','movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');
        Schema::dropIfExists('movie_director');

    }
}
