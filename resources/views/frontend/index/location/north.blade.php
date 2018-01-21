@extends('frontend.global.master')
@section('content')

<div class="row" style="background:url('../../public/img/bg.jpg')">
    <div class="sixteen wide column">
        ABC
    </div>
</div>

<div class="row" style="background:url('../../public/img/bg.jpg')" >
    <div class="four wide column" style="padding-top:30px;margin-left:70px; ">
        <img class="img-fluid" style="width:120px;height:120px;" src="{!! url('public/img/logo.jpg')!!}"/>
        <h3 style="color:white;margin-top:40px;margin-left:20px;">HOMEPAGE</h3>
    </div>

</div>
<div class="row">
    <div class="four wide column"></div>
    <div class="twelve wide column">
        <img src="{!! url('public/img/background-north.png')!!}" />
    </div>
</div>
<div class="row">
    <div class="four wide column"></div>
    <div class="twelve wide column" style="">
        <div style="border-top:5px solid #043481;width:300px;"></div>
        <h1 style="color:white;">WHERE PLACE</h1>
        <h3 style="color:white;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h3>
    </div>
</div>
<div class="ui grid " style="background:url('../../public/img/bg.jpg');">
    <div class="row" >

    </div>
    <div class="row "  >
        <div class="col-xl-12 col-md-12 col-sm-12  col-xs-12" style="color:white;">
            <div style="margin-left:30%;">
                <img class="img-fluid" src="{!! url('public/img/background-north.png')!!}" />
            </div>
            <div style="margin-top:90px;margin-left:450px;">
                <img id="marker-1" class="img-fluid marker hover-tooltip" title="Some tooltip text!" data-toggle="tooltip"
                data-alt="{!! url('public/img/bookmark-big.png')!!}" src="{!! url('public/img/bookmark-small.png') !!}"  />
                <div class="tooltip bs-tooltip-top" role="tooltip">
                    <div class="arrow"></div>
                    <div class="tooltip-inner">
                        Some tooltip text!
                    </div>
                </div>
                <div style="margin-top:20px;">
                    <img id="marker-2" class="img-fluid marker" data-alt="{!! url('public/img/bookmark-big.png')!!}" src="{!! url('public/img/bookmark-small.png') !!}"  />
                </div>
                <div>
                    <img id="marker-3" class="img-fluid marker" data-alt="{!! url('public/img/bookmark-big.png')!!}" src="{!! url('public/img/bookmark-small.png') !!}"  />
                </div>
                <div>
                    <img id="marker-4" class="img-fluid marker" data-alt="{!! url('public/img/bookmark-big.png')!!}" src="{!! url('public/img/bookmark-small.png') !!}"  />
                </div>

            </div>
        </div>
        <div class="col-md-8">

        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.hover-tooltip').tooltip('enable');
        $(".marker").hover(
            function(){
                var alt = $(this).data('alt');
                $(this).data('alt',$(this).attr('src'));
                $(this).attr('src',alt);

            }, function(){
                var alt = $(this).data('alt')
                $(this).data('alt',$(this).attr('src'));
                $(this).attr('src',alt);

            }
        );
    });
    // $(document).ready(function(){
    //
    //
    //     $('img.marker').hover(
    //         function(){
    //             var alt-src = $(this).data('alt-src')
    //             $(this).data('alt-src',$(this).attr('src'));
    //             $(this).attr('src',alt-src);
    //         },
    //         function(){
    //             var alt-src = $(this).data('alt-src')
    //             $(this).data('alt-src',$(this).attr('src'));
    //             $(this).attr('src',alt-src);
    //         }
    //     );
    //     // var changeImage = function(){
    //     //     var abc = $(this);
    //     //     var newAtt = abc.data('alt-src');
    //     //     abc.data('alt-src', abc.attr('src'));
    //     //     abc.attr('src', newAtt);
    //     // }
    //     // $(function () {
    //     //     $('img.marker').hover(changeImage, changeImage);
    //     // });
    //
    //
    // });
</script>
@stop
