<!-- Willkommenseite Slider-Task ohne Lootbox-->
<!doctype html> <!-- html dokumenttyp-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include ('footer')
        <title>Willkommen</title>
    </head>
    <body>
        <div class="flex-center">
                <div class="welcome-c">
                    <div class="ueberschrift" style="margin-top: 15%">Slider-Task   <!--Seitenüberschrift mit 15% Platz nach oben-->
                    </div>
                    <div><br><br><br></div>
                    <div class=" links">
                        <a href="slider">Start</a>     <!--Link zur Slider-Task Seite ohne Lootbox-->
                    </div>
                    <div class="containerbox">     <!--Textfeld für Begrüßungstext-->
                        <p>Vielen Dank, dass Sie an diesem Experiment teilnehmen! <br>
                            Klicken Sie auf Start um mit der Aufgabe zu beginnen. Im Anschluss folgt ein kurzer Fragebogen.</p>
                    </div>
                </div>
        </div>
    </body>
</html>
