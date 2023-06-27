<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
  public function index() {
    return view ('welcome');
  }

  public function about() {
    return view ('about');
  }

  public function film() {
    //chiedere i dati al database
    //il controller chiama il Model
    $collMovies = Movie::all(); //SELECT * FROM books

    // $collMovies = Movie::where('title', 'le iene')->get();
    // $collMovies = Movie::where('title', LIKE, '%bill%')->get();

    //il controller chiama la View passandogli i dati
    return view ('film', compact('collMovies'));
    
           //equivalente a scrivere :
           //  return view( 'film', [
            // 'collMovies'=> $movies,
            // ]);
  }
}
