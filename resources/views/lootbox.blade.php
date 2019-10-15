<!-- Slider-Task Seite mit Lootbox-->
<!doctype html>
<html lang="en">
<head>      <!-- bootstrap css für Sliderstyle importieren -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @include ('footer')         <!--footer importieren -->
    <title>Slider</title>       <!--Tab Beschriftung -->
</head>
<body onload="sliderscale()">   <!--Aufruf Funktion sliderscale() -->
<div class="flex-center">
    <div class="slider-c" style="width: 80%">       <!--abstand oben durch slider-c, kontainer auf 80% der Bildschrimbreite -->
        <div class="">  <!--############## kann weg glaub ich ################## -->
            <!-- Aufgabenbeschreibung -->
            <p><b>Aufgabe:</b>  Ziehen Sie alle Slider auf den Wert 50!
                <br> Die Aufgabe kann nach dem ersten Durchlauf jederzeit beendet werden.
                <br> Es sind maximal 20 Durchläufe möglich.
            </p>
            <!--Zähler für Durchlaufzahl und Sliderwert -->
            <p>Anzahl Durchläufe: <span id="durchlauf" style="color:blue ">0</span></p>     <!-- "span" generischer Inlinekontainer für styling-Zwecke, durch ID ansprechbar-->
            <p>Aktueller Wert: <span id="sliderWert" style="color:blue ">0</span></p>
        </div>
        <!-- Slider 1 -->
        <div class="custom-range">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider1"> <!-- Slideroptionen: Stil, min-max, Schrittgröße... -->
            <script>     //script eingebunden für Funktionsaufruf
                valueF(0);  <!-- Aufruf Funktion valueF(Übergabewert 0) -->
            </script>
        </div>
        <div class="" style="margin-bottom: 1%"></div>  <!-- Abstandshalter zum nächsten Slider -->
        <!-- Slider 2 -->
        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider2">
            <script>
                valueF(1);
            </script>
        </div>
        <div class="" style="margin-bottom: 1%"></div>
        <!-- Slider 3 -->
        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider3">
            <script>
                valueF(2);
            </script>
        </div>
        <div class="" style="margin-bottom: 1%"></div>
        <!-- Slider 4 -->
        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider4">
            <script>
                valueF(3);
            </script>
        </div>
        <div class="" style="margin-bottom: 1%"></div>
        <!-- Slider 5 -->
        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider5">
            <script>
                valueF(4);
            </script>
        </div>
        <div class="" style="margin-bottom: 1%"></div>
        <!-- übergeordneter div kontainer für buttons -->
        <div align="right">
            <!-- Beenden Button -->
            <button style="width: 88px" type="button" class="btn btn-primary" id="ende" onclick="overlayvis()" disabled>    <!--  Buttonformatierung und bei click Aufruf Funktion overlayvis() -->
                Beenden
            </button>
            <!-- Weiter Button -->
            <button style="width: 88px" type="button" class="btn btn-primary" id="weiter" onclick="weiterF(1)" disabled>    <!--  Buttonformatierung und Aufruf Funktion weiterF() -->
                Weiter
            </button>
        </div>
        <div class="overlay" id="overlay" style="display: none">    <!-- css overlay, default: nicht anzeigen, wird durch Funktion overlayvis() sichtbar -->
            <div class="lootbox" id="lootbox" style="display: none">    <!-- css lootbox, default: nicht anzeigen -->
                <img src="{{url('/images/box.png')}}" id="boxid" alt="Image" class="imagewackel" onclick="clickBox()">  <!-- box.png für Lootbox laden, bei click Funktion clickBox() aufrufen -->
            </div>
            <div class="popup" id="popup" style="display: none">    <!-- Fenster wenn Beenden Button betätigt wurde, , durch overlayvis() sichtbar -->
                <p>Sie haben den SliderTask <span id="anzdurch" style="color:blue ">0</span> Mal absolviert! Wenn Sie
                    die Anwendung beenden und zur Umfrage weitergeleitet werden möchten, klicken Sie den Button
                    "Umfrage".</p>
                <div class="text-right">    <!-- kontainer für Buttons  -->
                    <div style="text-align: center;">
                        <button id="umfragebtn" onclick="umfrage(2)" class="btn btn-primary ">Umfrage</button>  <!-- Button für Umfrage, bei click Funktion umfrage() aufrufen -->
                        <button id="backbutton" onclick="overlayinvis()" class="btn btn-primary ">Zurück</button>   <!-- Button zurück zum Slider-Task, bei click Funktion overlayinvis() aufrufen -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
