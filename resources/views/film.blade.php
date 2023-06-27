@extends('layouts.base')

@section('contents')
    <h2>Questi sono i nostri film</h2>

    <div class="row g-3 row-cols-3">
        @foreach ($movies as $movie)
        <div class="col">
         
                <div class="card h-100">
                <img src="{{Vite::asset('resources/img/'. $movie->img) }}" class="card-img-top h-75" alt="{{$movie->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">{{substr($movie->plot, 0, 100) }}..</p>
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
              </div>  
        </div>
        @endforeach
    </div>
    
@endsection