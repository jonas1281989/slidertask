<!-- Footer Seite zum Import von meta content, online style sheets, csrf token usw.-->
<meta name="csrf-token" content="{{ csrf_token() }}">                                   <!-- cross site  request forgery token für browsersicherheit-->
<meta charset="utf-8">                                                                  <!-- ################### unnötig glaub ich ########################-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">                  <!-- ##############   unnötig glaub ich #############-->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">       <!-- Online style sheets importieren-->
<link rel="stylesheet" type="text/css" href="css/mycss.css" media="screen"/>
<script type="text/javascript" src="{{ URL::asset('js/myjs.js') }}"></script>   <!-- Import der Javascript dateien myjs und app-->
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
                                                                                <!-- ################### unnötig ########################-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

