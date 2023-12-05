<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function showFilmView() {
        return view();
    }

    public function createFilmView() {
        return view('Film.Create_Film');
    }

    public function createFilm(Request $request) {

        $extension = $request->file('')->getClientOriginalExtension();
        $file_name = $request->FilmName.'.'.$extension;
        $request->file('')->storeAs('/public/Trailer/', $file_name);

        // Film::create([
        //     'FilmName' => $request->,
        //     'FilmSynopsis' => $request->,
        //     'FilmDuration' => $request->,
        //     'FilmReleaseDate' => $request->,
        //     'FilmAgeRestriction' => $request->,
        //     'FilmDirector' => $request->,
        //     'FilmPoster' => $request->,
        //     'FilmSubtitle' => $request->,
        //     'FilmTrailer' => $request->,
        // ]);
    }
}
