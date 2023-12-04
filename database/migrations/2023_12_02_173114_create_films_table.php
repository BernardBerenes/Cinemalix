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
            $table->string('FilmGenre');
            $table->integer('FilmDuration');
            $table->date('FilmDate');
            $table->integer('FilmAgeRestriction');
            $table->float('FilmRating');
            $table->string('FilmTrailer');
            $table->string('FilmDirector');
            $table->string('FilmSubtitle');
            $table->string('FilmType');
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
