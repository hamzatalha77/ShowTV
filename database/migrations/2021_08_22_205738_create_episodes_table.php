<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('season_id')->unsigned();
            $table->string('episode_name')->nullable();
            $table->string('episode_link')->nullable();
            $table->string('download_link')->nullable();
            $table->boolean('status')->default(false);
            $table->string('slug')->nullable();
            $table->string('duration')->nullable();
            $table->string('imdb_episode')->nullable();
            $table->string('status')->nullable();
            $table->string('user_name')->nullable();
            $table->string('quality')->nullable();
            $table->timestamps();
            $table->foreign('season_id')->references('id')->on('seasons')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
