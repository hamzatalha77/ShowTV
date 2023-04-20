<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serie_name')->nullable();
            $table->string('description')->nullable();
            $table->string('age_classification')->nullable();
            $table->string('class_serie')->nullable();
            $table->string('language')->nullable();
            $table->string('imdb')->nullable();
            $table->string('slug')->nullable();
            $table->string('user_name')->nullable();
            $table->string('country')->nullable();
            $table->string('tags')->nullable();
            $table->string('serie_photo')->nullable();
            $table->string('image_poster_serie')->nullable();
            $table->string('youtube_link')->nullable();
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
            $table->string('date_release')->nullable();
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
        Schema::dropIfExists('series');
    }
}
