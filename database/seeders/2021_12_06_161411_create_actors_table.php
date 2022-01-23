<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('actors', function (Blueprint $table) {
            $table->id('actor_id');
            $table->string('first_name',100);
            $table->string('last_name',100);
        });
        Schema::create('movie_actor', function (Blueprint $table) {
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('movie_id');
            $table->engine = 'InnoDB';
            $table->foreign('actor_id')->references('actor_id')->on('actors');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->primary(['actor_id','movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
        Schema::dropIfExists('movie_actor');
    }
}
