<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_animes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anime_id')->unsigned();
            $table->string('season_name')->nullable();
            $table->string('season_number')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('user_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('views')->nullable();
            $table->boolean('status')->default(false);
            $table->string('season_image')->nullable();
            $table->timestamps();
            $table->foreign('anime_id')->references('id')->on('animes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season_animes');
    }
}
