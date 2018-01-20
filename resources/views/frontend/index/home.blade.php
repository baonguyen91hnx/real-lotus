@extends('frontend.global.master')
@section('content')
<div class="container-fluid" style="background:url('public/img/bg.jpg')">
    <div class="row main-screen">
        <div class="col-md-5 col-xs-12" style="height:700px;margin:100px;color:white;background:url('public/img/map.png') no-repeat center;">
            <div class="row">
                <div class="col-md-5 map north" onclick="window.location='{{url('index/location/north')}}'" style="border:2px solid blue;margin-left:220px;height:200px;">
                    North
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="border:2px solid black;margin-left:300px;height:160px;">North-Mid</div>
            </div>
            <div class="row">
                <div class="col-md-4" style="border:2px solid green;margin-left:370px;height:160px;">South-Mid</div>
            </div>
            <div class="row">
                <div class="col-md-5" style="border:2px solid pink;margin-left:270px;height:170px;">South</div>
            </div>


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

@endsection
