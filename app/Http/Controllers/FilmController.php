<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function showFilmView() {
        $films = Film::all();

        return view('Film.View_Film_All')->with('film', $films);
    }

    public function createFilmView() {
        $genres = Genre::all();

        return view('Film.Create_Film')->with('genre', $genres);
    }

    public function createFilm(Request $request) {
        $request->validate([
            'FilmName' => 'required|unique:films,FilmName',
            'FilmSynopsis' => 'required|min:40|max:1000',
            'Genre' => 'required',
            'FilmDuration' => 'required',
            'FilmReleaseDate' => 'required',
            'FilmAgeRestriction' => 'required',
            'FilmDirector' => 'required',
            'FilmRating' => 'required',
            'FilmLanguage' => 'required',
            'FilmSubtitle' => 'required',
            'FilmPoster' => 'required|file',
            'FilmTrailer' => 'required|file'
        ]);
        $extension = $request->file('FilmPoster')->getClientOriginalExtension();
        $FilmPoster = $request->FilmName.'.'.$extension;
        $request->file('FilmPoster')->storeAs('/public/Poster/', $FilmPoster);

        $extension = $request->file('FilmTrailer')->getClientOriginalExtension();
        $FilmTrailer = $request->FilmName.'.'.$extension;
        $request->file('FilmTrailer')->storeAs('/public/Trailer/', $FilmTrailer);

        Film::create([
            'FilmName' => $request->FilmName,
            'FilmSynopsis' => $request->FilmSynopsis,
            'FilmDuration' => $request->FilmDuration,
            'FilmReleaseDate' => $request->FilmReleaseDate,
            'FilmAgeRestriction' => $request->FilmAgeRestriction,
            'FilmDirector' => $request->FilmDirector,
            'FilmRating' => $request->FilmRating,
            'FilmLanguage' => $request->FilmLanguage,
            'FilmSubtitle' => $request->FilmSubtitle,
            'FilmPoster' => $FilmPoster,
            'FilmTrailer' => $FilmTrailer,
            'GenreID' => $request->Genre
        ]);

        return redirect(route('dashboard'));
    }

    public function detailFilmView($id) {
        $films = Film::findOrFail($id);
        $genres = Genre::findOrFail($films->GenreID);

        return view('Film.View_Detail_Film')->with('film', $films)->with('genre', $genres);
    }
}
