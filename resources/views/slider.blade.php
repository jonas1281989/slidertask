<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @include ('footer')
    <title>Slider</title>
</head>

<body onload="sliderscale()">
<div class="left title">
    <a href="\" style="width: 88px" type="button" class="btn btn-primary" role="button">Home</a>
</div>
<div class="flex-center">
    <div class="slider-c" style="width: 80%">
        <div class="">
            <p>Aufgabe: Ziehen Sie alle Slider auf den Wert 50!</p>
            <p>Anzahl Durchläufe: <span id="durchlauf" style="color:blue ">0</span></p>
            <p>Aktueller Wert: <span id="sliderWert" style="color:blue ">0</span></p>
        </div>

        <div class="custom-range">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider1">
            <script>
                valueF(0);
            </script>
        </div>

        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider2">
            <script>
                valueF(1);
            </script>
        </div>

        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider3">
            <script>
                valueF(2);
            </script>
        </div>

        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider4">
            <script>
                valueF(3);
            </script>
        </div>

        <div class="custom-range ">
            <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider5">
            <script>
                valueF(4);
            </script>
        </div>

        <div align="right">
            <button style="width: 88px" type="button" class="btn btn-primary" id="ende" onclick="overlayvis()" disabled>
                Beenden
            </button>
            <button style="width: 88px" type="button" class="btn btn-primary" id="weiter" onclick="weiterF(2)" disabled>
                Weiter
            </button>
        </div>
        <button type="button" class="btn btn-primary" id="setFifty" onclick="setFifty()">
            setFifty
        </button>
        <div class="overlay" id="overlay" style="display: none">
            <div class="popup" id="popup" style="display: none">
                <p>Sie haben den SliderTask <span id="anzdurch" style="color:blue ">0</span> Mal absolviert! Wenn Sie
                    die Anwendung beenden und zur Umfrage weitergeleitet werden möchten, werden Sie über den Button
                    "Umfrage" weitergeleitet.</p>
                <div class="text-right">
                    <div style="text-align: center;">
                        <a href="http://www.google.com" class="btn btn-primary ">Umfrage</a>
                        <button onclick="overlayinvis()" class="btn btn-primary ">Zurück</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
