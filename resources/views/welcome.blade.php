<!-- Seite nur für Entwickler, Probanden bekommen sie nicht zu sehen-->
<!-- -->
<!doctype html> <!--dokumenttyp html-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--html Rumpf-->
    <head>
        @include ('footer') <!--footer importieren -->
        <title>Willkommen</title>   <!-- Titel im Browsertab-->
    </head>
    <body>
        <div class="flex-center">   <!-- übergeordneter div-kontainer, elemente mittig anordnen-->
                <div class="welcome-c">     <!-- div kontainer für Überschrift und Links-->
                    <div class="ueberschrift" style="margin-top: 15%">Slider-Task   <!-- div kontainer für rand oben 15%-->
                    </div>
                    <div><br><br><br></div>
                    <div class=" links">    <!--div für die Links-->
                        <a href="wslider">Slider</a>
                        <a href="wlootbox">Lootbox</a>
                    </div>
                </div>
        </div>
    </body>
</html>
