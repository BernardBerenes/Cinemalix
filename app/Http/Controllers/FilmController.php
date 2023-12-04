<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function createFilmView() {
        return view('Film.Create_Film');
    }

    public function createFilm(Request $request) {

        // $extension = $request->file('')->getClientOriginalExtension();
        // $file_name = $request->FilmName.'.'.$extension;
        // $request->file('')->storeAs('/public/Video/', $file_name);

        // Film::create([
        //     'FilmName' => $request->,
        //     'FilmSynopsis' => $request->,
        //     'FilmGenre' => $request->,
        //     'FilmDuration' => $request->,
        //     'FilmDate' => $request->,
        //     'FilmAgeRestriction' => $request->,
        //     'FilmRating' => $request->,
        //     'FilmTrailer' => $request->,
        //     'FilmDirector' => $request->,
        //     'FilmSubtitle' => $request->,
        //     'FilmType' => $request->,
        // ]);
    }
}
