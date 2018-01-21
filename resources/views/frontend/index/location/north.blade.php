@extends('frontend.global.master')
@section('content')
<div class="container-fluid" style="background:url('../../public/img/bg.jpg');min-height:1000px;">
    <div class="row" style="padding-top:30px;margin-left:70px; ">
        <img class="img-fluid" style="width:120px;height:120px;" src="{!! url('public/img/logo.jpg')!!}"/>
        <h3 style="color:white;margin-top:40px;margin-left:20px;">HOMEPAGE</h3>
    </div>
    <div class="row justify-content-md-center"  >
        <div class="col-md-8  col-xs-12" style="height:500px;color:white;background:url('../../public/img/background-north.png') no-repeat top;">
            <div style="background-color:black;margin-top:100px;margin-left:570px;width:50px;height:50px;">ABC</div>
            <div style="background-color:red;margin-top:30px;margin-left:450px;width:50px;height:50px;">DEF</div>
            <div style="background-color:blue;margin-left:720px;width:50px;height:50px;">JKL</div>
            <div style="background-color:pink;margin-left:550px;width:50px;height:50px;">QWE</div>
        </div>
        <div class="col-md-8">
            <div style="border-top:5px solid #043481;width:300px;"></div>
            <h1 style="color:white;">WHERE PLACE</h1>
        </div>
        <div class="col-md-8">
            <h3 style="color:white;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h3>
        </div>
    </div>


</div>
@stop
