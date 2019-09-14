<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include ('footer')
        <title>Willkommentest</title>
        <script type="text/javascript" src="{{ URL::asset('js/myjs.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="flex-center">
                <div class="content">
                    <div class="ueberschrift" style="margin-top: 15%">Slider-Task
                    </div>
                    <div><br></div>
                    <div class=" links">
                        <a href="slider">Start</a>
                    </div>
                    <div class="containerbox content" style="font-size: 2vh;">
                            <p>SliderTask ist eine Applikation bei der Anwender mehrere Slider auf einen definierten Wert ziehen sollen.<br>
                            Mit Beendigung des SliderTasks folgt ein Fragebogen, welcher nach bestem Gewissn auszufüllen ist.</p>
                    </div>
                </div>
        </div>
    </body>
</html>
