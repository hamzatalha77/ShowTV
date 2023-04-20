<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anime_name')->nullable();
            $table->string('tags')->nullable();
            $table->string('slug')->nullable();
            $table->string('date_release')->nullable();
            $table->string('description')->nullable();
            $table->string('age_classification')->nullable();
            $table->string('country')->nullable();
            $table->string('imdb')->nullable();
            $table->string('image_anime')->nullable();
            $table->string('poster_anime')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('language')->nullable();
            $table->string('name_producer')->nullable();
            $table->string('user_name')->nullable();
            $table->string('views')->nullable();
            $table->string('special')->default(false);
            $table->boolean('status')->default(false);
            $table->boolean('top')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}
