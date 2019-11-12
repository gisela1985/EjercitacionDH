<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index () {
        $peliculas = Movie::paginate(6);
        //dd($peliculas);
        return view('movies.listadoPeliculas')-> with ('peliculas', $peliculas);
    }

    public function show ($id) {
        //dd($id);
        $pelicula = Movie::find($id);
        //dd($pelicula);
    return view ('movies.detallePelicula')->with('pelicula',$pelicula);
    }
}
