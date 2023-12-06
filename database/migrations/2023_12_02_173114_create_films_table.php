<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('FilmName');
            $table->string('FilmSynopsis');
            $table->integer('FilmDuration');
            $table->date('FilmReleaseDate');
            $table->string('FilmAgeRestriction');
            $table->string('FilmDirector');
            $table->string('FilmPoster');
            $table->string('FilmSubtitle');
            $table->string('FilmTrailer');
            $table->unsignedBigInteger('GenreID');
            $table->foreign('GenreID')->references('id')->on('genres')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('films');
    }
};
