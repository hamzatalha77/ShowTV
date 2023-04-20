<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_animes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('season_id')->unsigned();
            $table->string('episode_name')->nullable();
            $table->string('imdb_episode')->nullable();
            $table->string('duration')->nullable();
            $table->string('quality')->nullable();
            $table->string('server_1')->nullable();
            $table->string('server_2')->nullable();
            $table->string('server_3')->nullable();
            $table->string('server_4')->nullable();
            $table->string('server_5')->nullable();
            $table->string('server_6')->nullable();
            $table->string('special_server_1')->nullable();
            $table->string('special_server_2')->nullable();
            $table->string('special_server_3')->nullable();
            $table->boolean('status')->default(false);
            $table->string('slug')->nullable();
            $table->string('views')->nullable();
            $table->string('special_download_link_1')->nullable();
            $table->string('special_download_link_2')->nullable();
            $table->string('special_download_link_3')->nullable();
            $table->string('download_link_1')->nullable();
            $table->string('download_link_2')->nullable();
            $table->string('download_link_3')->nullable();
            $table->string('user_name')->nullable();
            $table->timestamps();
            $table->foreign('season_id')->references('id')->on('season_animes')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_animes');
    }
}
