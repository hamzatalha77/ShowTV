<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serie_id')->unsigned();
            $table->string('season_name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(false);
            $table->string('photo_season')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('number')->nullable();
            $table->string('imdb_season')->nullable();
            $table->string('user_name')->nullable();
            $table->timestamps();
            $table->foreign('serie_id')->references('id')->on('series')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
}
