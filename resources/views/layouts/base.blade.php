<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boolean film</title>
        @vite('resources/js/app.js')
    </head>
    <body >
        {{-- <img src="{{Vite::asset('resources/img/jumbotron.png')}}" alt=""> --}}
        
        @include('partials.header')
        
        <div class="container">
            <main>
                @yield('contents')
            </main>
        </div>
       
        @include('partials.footer')
    </body>
</html>