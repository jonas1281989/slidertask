<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @include ('footer')
    <title>Slider</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
            position: absolute;
            top: 7pc;
        }

        .title {
            font-size: 84px;
        }
        .subtitle {
            font-size: 30px;
        }
        .title2-left {
            text-align: left;
             font-size: 60px;
         }

        .links > a {
            color: #636b6f;
            padding: 0 50px;
            font-size: 26px;
            font-weight: 600;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 50px;
        }




        .randrot{
            border-width:        6px;
            border-style:       solid;
            border-color:        red;
        }
        .randblau{
            border-width:        6px;
            border-style:        solid;
            border-color:        blue;
        }
        .randgrün{
            border-width:        6px;
            border-style:        solid;
            border-color:        green;
        }
        .randgelb{
            border-width:        6px;
            border-style:        solid;
            border-color:        yellow;
        }
    </style>
</head>
    <body>
     <!--Link von Home-Button noch anpassen-->
    <div class="left title"><a href="\"   type="button" class="btn btn-primary" role="button">Home</a></div>
     <div class="flex-center randgelb">
        <div class="content randgrün" style="width: 80%">
            <div class="title2-left m-b-md randrot">
                Slider-Task
            </div>
            <div class="subtitle">
            <p>Aufgabe:</p>
            <p>Ziehen Sie alle Slider auf den Wert 50!</p>
            <p>Aktueller Wert:<br><span style="color:blue "id="demo"></span></p>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="test1">
                <script>
                    var rangeslider = document.getElementById("test1");
                    var output = document.getElementById("demo");
                    output.innerHTML = rangeslider.value;

                    rangeslider.oninput = function() {
                        output.innerHTML = test1.value;
                    }
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="test2">
                <script>
                    var rangeslider = document.getElementById("test2");
                    var output = document.getElementById("demo");
                    output.innerHTML = rangeslider.value;

                    rangeslider.oninput = function() {
                        output.innerHTML = test2.value;
                    }
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="test3">
                <script>
                    var rangeslider = document.getElementById("test3");
                    var output = document.getElementById("demo");
                    output.innerHTML = rangeslider.value;

                    rangeslider.oninput = function() {
                        output.innerHTML = test3.value;
                    }
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="test4">
                <script>
                    var rangeslider = document.getElementById("test4");
                    var output = document.getElementById("demo");
                    output.innerHTML = rangeslider.value;

                    rangeslider.oninput = function() {
                        output.innerHTML = test4.value;
                    }
                </script>
            </div>
            <div class="custom-range randblau">
                <input type="range" min="0" max="100" value="0" step="1" class="custom-range" id="test5">
                <script>
                    var rangeslider = document.getElementById("test5");
                    var output = document.getElementById("demo");
                    output.innerHTML = rangeslider.value;

                    rangeslider.oninput = function() {
                        output.innerHTML = test5.value;
                    }
                </script>
            </div>
            <div class="randrot" align="right">
                <button  type="button" class="btn btn-primary" onclick="testF()">Weiter</button>
            </div>
        </div>
    </div>
    </body>
</html>
