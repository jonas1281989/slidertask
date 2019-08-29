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

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            position: absolute;
            top: 7pc;
        }

        .title {
            font-size: 84px;
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
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }
    </style>
</head>
    <body>
     <!--Link von Home-Button noch anpassen--!>
    <div class="left title"><a href="http://localhost/slidertask/public"   type="button" class="btn btn-primary" role="button">Home</a></div>
    <div class="flex-center">
        <div class="content">
            <div class="title2-left m-b-md">
                Slider-Task
            </div>
            <div class="slider">
                <input type="range" class="custom-range" id="test1" name="points1" value="0">
                <input type="range" class="custom-range" id="test2" name="points2" value="0">
                <input type="range" class="custom-range" id="test3" name="points3" value="0">
                <input type="range" class="custom-range" id="test4" name="points4" value="0">
                <input type="range" class="custom-range" id="test5" name="points5" value="0">
                <div align="center"> <button  type="button" class="btn btn-primary" onclick="testF()">Reset</button> </div>
            </div>
        </div>
    </div>
    </body>
</html>
