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
                        <p>Vielen Dank, dass Sie an diesem Experiment teilnehmen! <br>
                            Klicken Sie auf Start um mit der Aufgabe zu beginnen, im Anschluss folgt ein kurzer Fragebogen.</p>
                    </div>
                </div>
        </div>
    </body>
</html>
