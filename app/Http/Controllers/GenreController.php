<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function showGenre() {
        $genres = Genre::all();

        return view('Genre.View_Genre');
    }

    public function createGenreView() {
        return view('Genre.Create_Genre');
    }

    public function createGenre(Request $request) {
        // Genre::create([
        //     'GenreName' => $request->,
        // ]);
    }
}
