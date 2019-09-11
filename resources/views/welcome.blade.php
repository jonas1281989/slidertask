<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/mycss.css" media="screen" />
        @include ('footer')
        <title>Willkommen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <!-- Brauchen wir ?
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->



            <div class="content">
                <div class="ueberschrift m-b-md">
                    Slider-Task
                </div>
                <div>

                </div>
                <div class="links title">
                    <a href="slider">Start</a>
                </div>
            </div>
                <div class="container content">
                    <div class="">
                        <p>Erklärungstext...</p>
                    </div>
                </div>
        </div>
    </body>
</html>
