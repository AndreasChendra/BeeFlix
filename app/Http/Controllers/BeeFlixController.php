<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genres;
use App\movies;
use App\episodes;

class BeeFlixController extends Controller
{
    //
    public function mainPage() {
        $genre = genres::get();
        $movie = movies::get();
        
        return view('main', ['movie'=>$movie, 'genre'=>$genre]);
    }

    public function movieDetail($id) {
        $movie = movies::find($id);
        $genre = genres::find($movie->genre_id);
        $episode = episodes::where('movie_id', $movie->id)->paginate(3);

        return view('moviedetail', ['movie'=>$movie, 'genre'=>$genre, 'episode'=>$episode]);
    }

    public function movieCategory($name) {
        $genre = genres::where('name', $name)->first();
        $movie = movies::where('genre_id', $genre->id)->get();


        return view('moviecategory', ['genre'=>$genre, 'movie'=>$movie]);
    }
}
