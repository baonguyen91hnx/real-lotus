<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lotus Real</title>
        <link href="{!! asset('public/css/bootstrap/bootstrap.min.css')!!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('public/css/custom.css')!!}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <script type="text/javascript" src="{!! asset('public/js/jquery-3.2.1.min.js')!!}"></script>
        <script type="text/javascript" src="{!! asset('public/js/bootstrap/bootstrap.min.js')!!}"></script>
        <!-- Styles -->

    </head>
    <body>
        @yield('content')
        
    </body>

</html>
