<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeAnimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_anime', function (Blueprint $table) {
        $table->integer('type_id')->unsigned();
        $table->integer('anime_id')->unsigned();
        $table->foreign('type_id')->references('id')->on('types')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('type_anime');
    }
}
