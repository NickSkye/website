@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-generic">
        <header class="section-header">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row" style="margin-left: 0;">
                    <div class="col-md-offset-1 col-sm-12 col-md-4" style="padding-left: 0; padding-right: 0;">

                        @include('partials.logo-container-large')
                        <div class="col-md-offset-1 col-md-6 visible-sm visible-xs no-padding">
                            <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                            <section id="services-header" class="large-copy bg-arrow-image-sm-employee animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>Customer Service is our middle name.</h1>

                            <p class="service-text">
                                Does your parking location have a financial leak? If so, we’ll find and fix it fast. But before we do anything, we conduct a full evaluation of each property to fully understand your specific situation. Not all locations are the same nor do they require the same solutions. We don’t just service parking management needs, we dig deeper to comprehend what is working and correct what isn’t.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image-employee animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>
        <div class="container-fluid first-green" style="padding-left: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green">
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0;">
                            <img src="/images/Commercial_page-headers.png" style="width: 100%; height: auto; padding-top: 5%;" alt="">

                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="training" style="margin-bottom: 25px;">We’re not just teaching mannerism,<br class="visible-sm visible-md visible-lg">
                            we’re shaping minds.</h2>
                        <p>With an aim to always expand and improve upon the overall customer experience, everyone in our organization is required to go through Guest Courtesy Training (GCT). Time to stop talking and start acting — GCT is a series of proven methods of providing excellence customer service. Specifically, it’s designed to educate attendants to act in a professional, predictable and respectful manner throughout all interaction with guests and visitors.


                        </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>






        <div class="container-fluid showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="training">We’re not just teaching mannerism,<br class="visible-sm visible-md visible-lg">
                            we’re shaping minds.</h2>
                        <p>With an aim to always expand and improve upon the overall customer experience, everyone in our organization is required to go through Guest Courtesy Training (GCT).
                        </p>

                        <ul>
                            <li>
                                <strong>Time to stop talking and start acting—</strong> GCT is a series of proven methods of providing excellence customer service. Specifically, it’s designed to educate attendants to act in a professional, predictable and respectful manner throughout all interaction with guests and visitors.
                            </li>

                        </ul>


                    </div>

                </div>
            </div>
        </div>








    </div>
@endsection
