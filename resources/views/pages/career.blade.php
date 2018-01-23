@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-segments">
        <header class="section-header">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row" style="margin-left: 0;">
                    <div class="col-md-offset-1 col-sm-12 col-md-4" style="padding-left: 0; padding-right: 0;">

                        @include('partials.logo-container-large')
                        <div class="col-md-offset-1 col-md-6 visible-sm visible-xs no-padding">
                            <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                            <section id="services-header" class="large-copy bg-arrow-image-sm animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>A career of caring for our customers.</h1>

                            <p class="service-text">We’re not looking for employees at CarPark; we’re looking for awesome family members who want to work in a warm and fun environment. People whom genuinely like, respect and care about others. Check our openings to see if there’s something right for you—if not—send your resume anyway. You never know, our household is always growing.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>

        <div class="container-fluid " style="padding-left: 0;">
            <div class="row no-padding content-greenbar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2>Customer service is our middle name.</h2>
                        <p>Does your parking location have a financial leak? If so, we’ll find and fix it fast. But before we do anything, we conduct a full evaluation of each property to fully understand your specific situation. Not all locations are the same nor do they require the same solutions. We don’t just service parking management needs, we dig deeper to comprehend what is working and correct what isn’t. Our internal audit procedures are second to none and have helped us collect millions of dollars for our clients every year. CarPark offers a fresh look at the challenges and difficulties facing today’s parking industry. From autonomous cars to ride share solutions—we invent new ideas daily to offset any possible loss of revenue.
                        </p>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
