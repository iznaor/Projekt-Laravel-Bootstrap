<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producers', function (Blueprint $table) {
            $table->id('producer_id');
            $table->string('first_name',100);
            $table->string('last_name',100);
        });
        Schema::create('movie_producer', function (Blueprint $table) {
            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('movie_id');
            $table->engine = 'InnoDB';
            $table->foreign('producer_id')->references('producer_id')->on('producers');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->primary(['producer_id','movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producers');
        Schema::dropIfExists('movie_producer');
    }
}
