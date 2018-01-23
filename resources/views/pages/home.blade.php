@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    {{--<div class="hidden-xs">--}}
    <div class="page page-home container-fluid">
        <header class="section-header max-height">
            <div id="video-container" class="video-small-container">
                <video src="/videos/video-3.mp4" class="video video-1 img-responsive"></video>

                <video src="/videos/video-2.mp4" class="video video-2 img-responsive"></video>
                <video src="/videos/video-1.mp4" class="video video-3 img-responsive"></video>


                <div id="video-preview-container">
                    <div class="video-preview-image video-preview-image-1"></div>
                    <div class="video-preview-image video-preview-image-2"></div>
                    <div class="video-preview-image video-preview-image-3"></div>
                </div>

                <div class="hidden-xs">
                @include('partials.video-svg-cover')
                </div>

                <a href="#" role="button" id="button-stop-video">
                    pause
                </a>
            </div>
            <div id="text-cover">
                <div class="container-fluid max-height">
                    <div class="row max-height">
                        <div class="col-sm-6 content-container ">
                            @include('partials.logo-container')

                            {{--<img src="/images/bg-home-3.jpg" alt="" class="arrow-image slide-in-left animate-enter hidden-sm hidden-md hidden-lg allow-activate-on-load">--}}
                            {{--<div class="clearfix"></div>--}}

                            <div class="content nav-padding text-center fade-in-up animate-enter allow-activate-on-load">
                                <div class="hidden-xs">
                                    <div class="video-caption video-caption-1">
                                        <h2 style="font-size: 42px;">"There is a great deal<br>of trust with CARPARK."</h2>

                                        <blockquote></blockquote>

                                        <p>
                                            <b>SEAN HASHEM</b>
                                            <br>
                                            Green Bridge Investments, Los Angeles
                                        </p>
                                    </div>

                                    <div class="video-caption video-caption-2">
                                        <h2 style="font-size: 42px;">"I would definitely<br>recommend CARPARK."</h2>

                                        <blockquote></blockquote>

                                        <p>
                                            <b>JACK RAVAN</b>
                                            <br>
                                            South Park Group, Los Angeles
                                        </p>
                                    </div>

                                    <div class="video-caption video-caption-3">
                                        <h2 style="font-size: 42px;">"CARPARK has doubled<br>our parking income."</h2>

                                        <blockquote></blockquote>

                                        <p>
                                            <b>TOM MEREDITH</b>
                                            <br>
                                            Legacy Partners, 1600 Vine, Los Angeles
                                        </p>
                                    </div>

                                    <div class="video-navigation-container visible-sm visible-xs">
                                        <a href="#" id="previous-button">
                                            <i class="fa fa-arrow-left"></i>
                                            previous
                                        </a><a href="#" id="next-button">
                                            next
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>

                                    <div class="video-navigation-container hidden-sm hidden-xs">
                                        <div class="col-xs-3 col-xs-offset-1 video-underline"><span><img src="/images/preview-sean.jpg" class="video-nav" id="first-video" ></span></div>
                                        <div class="col-xs-3 video-underline"> <span><img src="/images/preview-jack.jpg" class="video-nav" id="second-video" ></span></div>
                                        <div class="col-xs-3 video-underline"><span><img src="/images/video-preview-1.png" class="video-nav" id="third-video"></span></div>
                                    </div>
                                </div>
                            </div>






                        </div>


                        {{--TEST--}}

                        {{--END--}}

                        <div class="col-sm-6 play-button-container">
                            <a href="#" id="play-button" class="hidden-xs">
                                <img src="/images/video-play-button.png" alt="play button">
                            </a>
                            <a href="#" id="play-button-xs" class=" visible-xs">
                                <img src="/images/video-play-button.png" alt="play button">
                            </a>
                        </div>
                    </div>
                </div>
                {{--start--}}
                {{--TEST--}}
                <div class="container visible-xs">
                    <div class="row">
                        <div class="content nav-padding text-center fade-in-up animate-enter allow-activate-on-load">
                            <div class="visible-xs">
                                <div class="video-caption video-caption-1">
                                    <h2>"There is a great deal of trust with CARPARK."</h2>

                                    <blockquote></blockquote>

                                    <p>
                                        <b>SEAN HASHEM</b>
                                        <br>
                                        Green Bridge Investments, Los Angeles
                                    </p>
                                </div>

                                <div class="video-caption video-caption-2">
                                    <h2>"I would definitely recommend CARPARK."</h2>

                                    <blockquote></blockquote>

                                    <p>
                                        <b>JACK RAVAN</b>
                                        <br>
                                        South Park Group, Los Angeles
                                    </p>
                                </div>

                                <div class="video-caption video-caption-3">
                                    <h2>"CARPARK has doubled our parking income."</h2>

                                    <blockquote></blockquote>

                                    <p>
                                        <b>TOM MEREDITH</b>
                                        <br>
                                        Legacy Partners, 1600 Vine, Los Angeles
                                    </p>
                                </div>

                                <div class="video-navigation-container">
                                    <a href="#" id="previous-button">
                                        <i class="fa fa-arrow-left"></i>
                                        previous
                                    </a><a href="#" id="next-button">
                                        next
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--END--}}
                {{--finish--}}
            </div>
        </header>

    </div>
    {{--<div class="hidden-sm" style="height: 100px;"></div>--}}
    <div class="visible-xs container-fluid" style="margin-top: 200px;">
        <footer id="footer" class="text-right">
            <div class="container-fluid big-marg" >
                <img src="/images/carpark-logo-light.svg" alt="Car Park Logo" class="logo pull-left">

                <p>CARPARK, Inc.</p>
                <p>6541 Hollywood Blvd #203, Los Angeles, CA 90028</p>
                <p>(323) 462-6060 &nbsp;&nbsp;&nbsp; park@carpark.com</p>

                <p>
                    &copy; copyright  2017 carpark inc. &nbsp;&nbsp;&nbsp;
                    privacy policy<span class="hidden-xs hidden-sm">&nbsp;&nbsp;&nbsp;</span><br class="hidden-md hidden-lg">
                    <a href="https://wollnerstudios.com">website by w brand studio, newport beach</a>
                </p>
            </div>
        </footer>
    </div>
    {{--</div>--}}
    {{--TEST OF COMPLETELY SEPARATE MOBILE PART--}}

    {{--<div class="page page-home container-fluid visible-xs">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-8">--}}
                    {{--<p style="margin-top: 75px;">We're Family . Talk to us.</p>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4">--}}
                    {{--<img src="/images/carpark-logo-final.png" alt="Car Park Logo" class="logo pull-left" style="width: 106px;">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div id="" class="col-xs-12">--}}
                    {{--<div id="video-container" class="" style="height: 250px; margin-top: 0;">--}}
                        {{--<video src="/videos/video-1.mp4" class="video video-1 img-responsive"></video>--}}
                        {{--<video src="/videos/video-2.mp4" class="video video-2 img-responsive"></video>--}}
                        {{--<video src="/videos/video-3.mp4" class="video video-3 img-responsive"></video>--}}

                        {{--<div id="video-preview-container">--}}
                            {{--<div class="video-preview-image video-preview-image-1"></div>--}}
                            {{--<div class="video-preview-image video-preview-image-2"></div>--}}
                            {{--<div class="video-preview-image video-preview-image-3"></div>--}}
                        {{--</div>--}}

                        {{--<div class="hidden-xs">--}}
                            {{--@include('partials.video-svg-cover')--}}
                        {{--</div>--}}

                        {{--<a href="#" role="button" id="button-stop-video">--}}
                            {{--pause--}}
                        {{--</a>--}}
                        {{--<div class="col-sm-6 play-button-container" style="top: 50%;">--}}
                            {{--<a href="#" id="play-button">--}}
                                {{--<img src="/images/video-play-button.png" alt="play button">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--END TEST CODE--}}
@endsection
