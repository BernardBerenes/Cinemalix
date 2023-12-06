<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function showFilmView() {
        return view();
    }

    public function createFilmView() {
        $genres = Genre::all();

        return view('Film.Create_Film')->with('genre', $genres);
    }

    public function createFilm(Request $request) {
        $request->validate([
            'FilmName' => 'required|unique:films,FilmName',
            'FilmPoster' => 'required|file',
            'FilmTrailer' => 'required|file',
            'FilmSubtitle' => 'required|file'
        ]);
        $extension = $request->file('FilmPoster')->getClientOriginalExtension();
        $FilmPoster = $request->FilmName.'.'.$extension;
        $request->file('FilmPoster')->storeAs('/public/Poster/', $FilmPoster);

        $extension = $request->file('FilmTrailer')->getClientOriginalExtension();
        $FilmTrailer = $request->FilmName.'.'.$extension;
        $request->file('FilmTrailer')->storeAs('/public/Trailer/', $FilmTrailer);

        $extension = $request->file('FilmSubtitle')->getClientOriginalExtension();
        $FilmSubtitle = $request->FilmName.'.'.$extension;
        $request->file('FilmSubtitle')->storeAs('/public/Subtitle/', $FilmSubtitle);


        Film::create([
            'FilmName' => $request->FilmName,
            'FilmSynopsis' => $request->FilmSynopsis,
            'FilmDuration' => $request->FilmDuration,
            'FilmReleaseDate' => $request->FilmReleaseDate,
            'FilmAgeRestriction' => $request->FilmAgeRestriction,
            'FilmDirector' => $request->FilmDirector,
            'FilmPoster' => $FilmPoster,
            'FilmSubtitle' => $FilmSubtitle,
            'FilmTrailer' => $FilmTrailer,
            'GenreID' => $request->Genre,
        ]);

        return redirect(route('dashboard'));
    }
}
