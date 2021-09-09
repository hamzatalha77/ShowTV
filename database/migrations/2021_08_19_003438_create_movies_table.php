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
            $table->id();
            $table->string('movie_name')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('image_movie')->nullable();
            $table->string('class')->nullable();
            $table->string('age_classification')->nullable();
            $table->string('language')->nullable();
            $table->string('quality')->nullable();
            $table->string('duration')->nullable();
            $table->string('translation')->nullable();
            $table->string('imdb')->nullable();
            $table->string('slug')->nullable();
            $table->string('user_name')->nullable();
            $table->string('country')->nullable();
            $table->string('tags')->nullable();
            $table->string('download_link')->nullable();
            $table->string('name_producer')->nullable();
            $table->string('real_name_actor1')->nullable();
            $table->string('real_name_actor2')->nullable();
            $table->string('real_name_actor3')->nullable();
            $table->string('name_actor1')->nullable();
            $table->string('name_actor2')->nullable();
            $table->string('name_actor3')->nullable();
            $table->string('photo_productor')->nullable();
            $table->string('photo_actor1')->nullable();
            $table->string('photo_actor2')->nullable();
            $table->string('photo_actor3')->nullable();
            $table->boolean('status')->default(false);
            $table->string('views')->nullable();
            $table->string('vote')->nullable();
            $table->string('comment')->nullable();
            $table->string('date_release')->nullable();
            $table->string('movie_link')->nullable();
            $table->string('youtube_link')->nullable();
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
        Schema::dropIfExists('movies');
    }
}
