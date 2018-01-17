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

        <script type="text/javascript" src="{!! asset('public/js/bootstrap/bootstrap.min.css')!!}"></script>
        <!-- Styles -->

    </head>
    <body>
        <div class="container-fluid" style="height:1000px;background:url('public/img/bg.jpg')">
            <div class="row">
                <div class="col-md-5" style="height:700px;margin:100px;color:white;background:url('public/img/map.png') no-repeat center;">


                </div>
                <div class="col-md-5" >
                    <div style="margin:100px;">
                        <img src="{!! asset('public/img/logo.jpg')!!}"  />
                        <h1 style="color:white;font-size:50px;margin-top:50px;">LOTUS REAL</h1>
                    </div>
                    <div style="color:white;" >
                        <h1>Welcome To LOTUS REAL</h1>
                        <p>Lorem Ipsum is simply dummy text of the printingand typesetting ndustry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type andscrambled it to make a type specimen book.</p>
                        <button class="btn btn-primary">Home Page</button>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
