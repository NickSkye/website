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
                            <section id="services-header" class="large-copy bg-arrow-image-sm">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>Hey, that's my spot.</h1>

                            <p class="service-text">
                                <strong id="daily" class="greentext">Daily</strong><br>Locate and reserve daily and hourly parking prior to driving.<br>
                                <a href="#">SELECT YOUR SPOT <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>
                                <strong id="monthly" class="greentext">Monthly</strong><br>Looking for long-term parking? Reserve it for a month.<br>
                                <a href="#">PURCHASE YOUR PASS <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>
                                <strong id="filming" class="greentext">Filming</strong><br>Need to be on-set? We handle production parking as well.<br>
                                <a href="#">LOCATIONS AVAILABLE <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image">

                        </section>
                    </div>

                </div>
            </div>
        </header>
        {{--<div class="container-fluid " style="padding-left: 0;">--}}
            {{--<div class="row no-padding content-greenbar">--}}
                {{--<div class="col-md-offset-1 col-md-9">--}}
                    {{--<div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">--}}

                        {{--<h2 id="management">PARKING MANAGEMENT</h2>--}}
                        {{--<p>CarPark excels at operating and managing parking facilities as an extended brand of the property. By truly understanding your needs—we’re able to take full advantage of your parking system's potential. We’ll demonstrate how to increase revenue and reduce expenses—all while providing the utmost in customer service.</p>--}}
                        {{--<br>--}}


                        {{--<a class="showmorebutton"><strong id="demo">Read More</strong> <i class="fa fa-caret-right" aria-hidden="true"></i></a>--}}

                        {{--<h3 class=" showmorecontent">Services include:</h3>--}}
                        {{--<ul class=" showmorecontent">--}}

                            {{--<li>Parking Management</li>--}}
                            {{--<li>Parking Consulting</li>--}}
                            {{--<li>Transportation</li>--}}
                            {{--<li>Valet Services & Events</li>--}}
                            {{--<li>Concierge & Directions (way finding)</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}



        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="leasing">LEASING.</h2>
                        <p>Coming soon!</p>

                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-whitebar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="transportations">TRANSPORTATION LOGISTICS.</h2>
                        <p>CarPark provides safe and reliable transportation services. Our professionally trained, courteous, uniformed, CD-licensed drivers have undergone thorough background checks and pre-screening evaluations.</p>
                        <br>
                        <p>We have our own fleet with shuttles in various sizes to accommodate most programs and we’re pleased to provide transportation services to facilitate alternative parking arrangements. Plus, we’re able to keep our fleet in top condition by maintaining regular schedules along pre-determined routes, so you’ll feel comfortable and in control.</p>
                    </div>

                </div>
            </div>
        </div>




        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="valet">VALET SERVICES.</h2>
                        <p>Are you experiencing high-volume or turnovers? Do you have more vehicles than the number of allowed parking spaces? CarPark can provide the right solution with specialized stacked or tandem parking. Our valet attendants are professional trained to provide your facility and your customers with an engaging and memorable parking experience.</p>



                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-whitebar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="">EVENT PARKING.</h2>
                        <p>For more than two decades, CarPark has been providing exceptional event parking services for clients such as Twentieth Century Fox, the Oscars and Emmy Awards after parties. Regardless of size, attendance or space limitations—our management team will work closely to develop and implement a full operation and logistics plan. Plus all our parking attendants, managers, supervisors and directors of operation are required to go through our extensive Step Up Plan. So you can rest assured that the parking activities will run smoothly and efficiently. </p>


                        <h3>Services include:</h3>
                        <ul>

                            <li>Valet Parking</li>
                            <li>Traffic Control</li>
                            <li>Door Attendants</li>
                            <li>Greeter</li>
                            <li>Concierge</li>
                            <li>Shuttle Services</li>
                            <li>Golf Carts</li>
                        </ul>


                    </div>

                </div>
            </div>
        </div>





        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="consulting">Consulting</h2>
                        <p>Check back later!</p>



                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-whitebar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="">CONCIERGE & DIRECTIONAL ASSISTANCE.</h2>
                        <p>Our Concierge Ambassador services provide general assistance to patients, visitors and staff for daily, monthly, survey and production parking locations. By understanding the layout of your facility, the Ambassador significantly increases the smoothness of a front drive. Visitors will receive detailed directions from a reliable source. In addition, the Ambassador maintains accurate and comprehensive logbooks of packages, mail and other items received. Plus, they’ll also orchestrate delivery of necessary items should the need arise. The Ambassador also acts as an eye in the sky, alerting the appropriate personnel of any suspicious activity or unsafe driving conditions.</p>

                    </div>

                </div>
            </div>
        </div>




    </div>
@endsection
