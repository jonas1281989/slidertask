<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include ('footer')
        <title>Willkommen</title>
    </head>
    <body>
        <div class="flex-center">
                <div class="welcome-c">
                    <div class="ueberschrift" style="margin-top: 15%">Slider-Task
                    </div>
                    <div><br><br><br></div>
                    <div class=" links">
                        <a href="slider">Start</a>
                    </div>
                    <div class="containerbox"  style="font-size: 2vh;">
                            <p>SliderTask ist eine Applikation bei der Anwender mehrere Slider auf einen definierten Wert ziehen sollen.<br>
                            Mit Beendigung des SliderTasks folgt ein Fragebogen, welcher nach bestem Gewissn auszufüllen ist.</p>
                    </div>
                </div>
        </div>
    </body>
</html>
