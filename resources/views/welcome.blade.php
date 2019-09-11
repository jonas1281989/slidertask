<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">





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
        <div class="flex-center quarter-height">
                <div class="containertext content">
                    <div class="ueberschrift">Slider-Task
                    </div>
                    <div><br></div>
                    <div class="links">
                        <a href="slider">Start</a>
                    </div>
                    <div class="containerbox content links">
                            <p>SliderTask ist eine Applikation bei der Anwender mehrere Slider auf einen definierten Wert ziehen sollen.<br>
                            Mit Beendigung des SliderTasks folgt ein Fragebogen, welcher nach bestem Gewissn auszufüllen ist.</p>
                    </div>
                </div>
        </div>
    </body>
</html>
