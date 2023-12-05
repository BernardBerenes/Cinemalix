<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function showGenreView() {
        $genres = Genre::all();

        return view('Genre.View_Genre')->with('genre', $genres);
    }

    public function createGenreView() {
        return view('Genre.Create_Genre');
    }

    public function createGenre(Request $request) {
        $request->validate([
            'GenreName' => 'required|min:4|max:20'
        ]);

        Genre::create([
            'GenreName' => $request->GenreName,
        ]);

        return redirect(route('showGenreView'));
    }
}
