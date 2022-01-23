<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('awards', function (Blueprint $table) {
            $table->id('award_id');
            $table->integer('oscar');
            $table->integer('golden_globe');
        });
        Schema::create('movie_award', function (Blueprint $table) {
            $table->unsignedBigInteger('award_id');
            $table->unsignedBigInteger('movie_id');
            $table->engine = 'InnoDB';
            $table->foreign('award_id')->references('award_id')->on('awards');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->primary(['award_id','movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
        Schema::dropIfExists('movie_award');

    }
}
