<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {!! Html::style("css/all.css") !!}
    {!! Html::style("css/font-awesome.min.css") !!}
</head>

@if (Route::getCurrentRoute()->uri() == '/')
    <body class="body-home">
    @include('front.commun.header_acceuil')
    @else
        <body class="body-away">
        @include("front.commun.header")
        @endif


        @yield("headerJS")
        </body>
</html>
