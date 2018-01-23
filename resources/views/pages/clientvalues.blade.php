@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    {{--Modal button--}}
    {{--<span style="left: 45%; position: absolute;"><a href="#" type="button"  data-toggle="modal" data-target="#myModal">login &nbsp;<i class="fa fa-lock" aria-hidden="true"></i></a></span>--}}


    <!-- Modal -->
    <div style="z-index: 200;">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-body">
                        <h1>Customer Login</h1>

                        <div class="form-group">
                            <label for="user_id" class="hidden">User ID</label>
                            <input type="text" class="form-control" placeholder="User ID" name="user_id" id="user_id" value="{{ old('user_id') }}">
                        </div>

                        <div class="form-group">
                            <label for="password" class="hidden">User ID</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{ old('password') }}">
                        </div>

                        <div class="text-left">
                            <a href="#" class="link-cta" role="button">Customer Login</a>
                        </div>

                        <div class="more-links-container">
                            <br><br>
                            <p><a href="#" class="text-black">Forgot your password?</a></p>
                            <p><a href="#" class="text-black">Don't have an online account? Register.</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    {{--END TEST--}}
    <div class="page page-segments">
        <header class="section-header">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row" style="margin-left: 0;">
                    <div class="col-md-offset-1 col-sm-12 col-md-4" style="padding-left: 0; padding-right: 0;">

                        @include('partials.logo-container-large')
                        <div class="col-md-offset-1 col-md-6 visible-sm visible-xs no-padding">
                            <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                            <section id="services-header" class="large-copy bg-arrow-image-sm-client animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>Driving revenues into high gear.</h1>

                            <p id="revenue" class="service-text">A solid partnership with Carpark has its advantages. We take the time to truly understand what it is you’re trying to achieve.  Our main objective is to increase your operating income by implementing new cashless systems or fixing any financial leaks in your garage. We’ll identify and measure key revenue drivers and then develop strategies to grow them. All without increasing costs. It’s about benchmarking your business so we can boost your Net Operating Income (NOI). Notice an upturn in productivity, attract new <a href="/segments" class="green-under">parking segments</a> and improve <a href="/contact" class="green-under">customer service</a>. Carpark is the driver’s seat when it comes to doubling your parking revenues.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image-client animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>

        <div class="container-fluid first-green" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >

                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/Commercial_page-headers.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Commercial_page-headers.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">

                            <p id=""><i>“The first thing Carpark did, was to come in with a qualified, educated attendant to begin assessment if we were having equipment failures, or whether it was abuse by people wanting to leave without paying for parking. They’ve doubled our parking income in the time they have been here! And from a financial standpoint we are currently exceeding our budget expectations for parking income.”</i></p>
                            <br>
                            <p><strong>Tom Meredith, Legacy Partners</strong><br>1600 Vine, Residential and Retail facility</p>

                            <p></p>
                            <br><br>
                            <button class="btn video-butt generic-butt btn-lg video" data-video="/videos/video-1.mp4" data-toggle="modal" data-target="#videoModal">SEE TOM'S VIDEO TESTIMONIAL</button>
                            {{--<a class="showmorebutton" href="#img1"><strong id="moresegments">SEE TOM'S VIDEO TESTIMONIAL</strong> <i class="fa fa-caret-right" aria-hidden="true"></i></a>--}}



                            <!-- lightbox container hidden with CSS -->




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <iframe width="100%" height="500" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{--TEST--}}
        {{--<section class="section-payment">--}}
            {{--<div class="container-fluid" style="padding-left: 0px;">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-offset-1 col-sm-5 ">--}}
                        {{--<div class="">--}}
                            {{--<h1>Online payment portal for your convenience.</h1>--}}

                            {{--<p>--}}
                                {{--Life can get really busy. Having one less thing to worry about is always nice. That's--}}
                                {{--why you can pay and get it out of the way right here. Thanks for parking with us. See--}}
                                {{--you next time.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-4 col-sm-offset-2">--}}
                        {{--<h1>Customer Login<br>Coming Soon!</h1>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="user_id" class="hidden">User ID</label>--}}
                            {{--<input type="text" class="form-control" placeholder="User ID" name="user_id" id="user_id" value="{{ old('user_id') }}">--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password" class="hidden">User ID</label>--}}
                            {{--<input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{ old('password') }}">--}}
                        {{--</div>--}}

                        {{--<div class="text-left">--}}
                            {{--<a href="#" class="link-cta" role="button">Customer Login</a>--}}
                        {{--</div>--}}

                        {{--<div class="more-links-container">--}}
                            {{--<br><br>--}}
                            {{--<p><a href="#" class="text-black">Forgot your password?</a></p>--}}
                            {{--<p><a href="#" class="text-black">Don't have an online account? Register.</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--END TEST--}}
    </div>
@endsection
