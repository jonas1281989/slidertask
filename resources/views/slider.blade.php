<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/mycss.css" media="screen" />
    @include ('footer')
    <title>Slider</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        @import url(css/mycss.css)screen;
    </style>
</head>
    <body>
     <!--Link von Home-Button noch anpassen-->
    <div class="left title"><a href="\"   type="button" class="btn btn-primary" role="button">Home</a></div>
     <div class="flex-center randgelb">
        <div class="content randgrün" style="width: 80%">

            <div class="subtitle">
                <p>Aufgabe: Ziehen Sie alle Slider auf den Wert 50!</p>
                <p>Anzahl Durchläufe: <span id="durchlauf" style="color:blue ">0</span></p>
                <p>Aktueller Wert: <span id="sliderWert" style="color:blue ">0</span></p>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider1">
                <script>
                    valueF(0);
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider2">
                <script>
                    valueF(1);
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider3">
                <script>
                    valueF(2);
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider4">
                <script>
                    valueF(3);
                </script>
            </div>
            <div class="custom-range randblau">

                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="slider5">
                <script>
                    valueF(4);
                </script>
            </div>

            <div class="randrot" align="right">
                <button  type="button" class="btn btn-primary" id="weiter" onclick="weiterF()" disabled>Weiter</button>
            </div>
            <button  type="button" class="btn btn-primary" id="setFifty" onclick="setFifty()" >setFifty</button>

        </div>
    </div>
    </body>
</html>
