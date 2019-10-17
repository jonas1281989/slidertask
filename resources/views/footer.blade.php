<!-- Footer Seite zum Import von meta content, online style sheets, csrf token usw.-->
<meta name="csrf-token" content="{{ csrf_token() }}">                                   <!-- cross site  request forgery token für browsersicherheit-->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">       <!-- Online style sheets importieren-->
<link rel="stylesheet" type="text/css" href="css/mycss.css" media="screen"/>
<script type="text/javascript" src="{{ URL::asset('js/myjs.js') }}"></script>   <!-- Import der Javascript dateien myjs und app-->
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>


