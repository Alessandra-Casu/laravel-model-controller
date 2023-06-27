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
    //chiedere i dati all database
    $movies = Movie::all();
    return view ('film', compact('movies'));
  }
}
