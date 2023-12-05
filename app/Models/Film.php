<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'FilmName',
        'FilmSynopsis',
        'FilmDuration',
        'FilmReleaseDate',
        'FilmAgeRestriction',
        'FilmDirector',
        'FilmPoster',
        'FilmSubtitle',
        'FilmTrailer',
        'GenreID'
    ];

    public function genres() {
        return $this->belongsTo(Genre::class, 'GenreID', 'id');
    }
}
