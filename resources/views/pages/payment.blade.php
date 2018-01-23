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
                            <section id="services-header" class="large-copy bg-arrow-image-sm-pay animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>Online payment portal for your convenience.</h1>

                            <p id="revenue" class="service-text">Life can get really busy. Having one less thing to worry about is always nice. That's why you can pay and get it out of the way right here. Thanks for parking with us. Locate and reserve hourly, daily, or monthly parking prior to driving.

                            </p>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="#">
                                <img src="/images/payment-portal-page-icons_03.png" width="55px" height="56px" alt="">
                                <div class="green-butt">
                                    DAILY & HOURLY
                                </div>
                                </a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">
                                <img src="/images/payment-portal-page-icons_05.png" width="55px" height="56px" alt="">
                                <div class="green-butt">
                                    MONTHLY PARKING
                                </div>
                                </a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">
                                <img src="/images/payment-portal-page-icons_05.png" width="55px" height="56px" alt="">
                                <div class="green-butt">
                                    FILM PRODUCTION
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image-pay animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>
        {{--<div class="container-fluid first-green" style="padding-left: 0;">--}}
            {{--<div class="row no-padding-lr content-greenbar">--}}
                {{--<div class="col-md-10">--}}
                    {{--<div class="inside-green" >--}}

                        {{--<div class="col-sm-5" data-aos="slide-right" style="padding-left: 0;">--}}
                            {{--<img src="/images/Commercial_page-headers.png" style="width: 100%; height: auto; padding-top: 5%;" alt="">--}}

                        {{--</div>--}}
                        {{--<div class="col-sm-7" data-aos="fade-up">--}}
                            {{--<h2 id="commercial" style="font-size: 32px;">Commercial</h2>--}}
                            {{--<p id="">Combining our best practices in facility management with the latest technology enables us to provide the best answer for increasing revenues and reducing operating expenses. For all commercial parking needs, we deliver the fastest, finest customer service in the business.</p>--}}
                            {{--<br>--}}


                            {{--<a class="showmorebutton"><strong id="moresegments">See All Our Segments Here</strong> <i class="fa fa-caret-right" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
@endsection
