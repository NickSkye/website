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
                            <h1>Maintenance</h1>

                            <p class="service-text">Maintenance Text
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
        <div class="container-fluid " style="padding-left: 0;">
            <div class="row no-padding content-greenbar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="management">RESTRIPING</h2>
                        <p>CarPark excels at operating and managing parking facilities as an extended brand of the property. By truly understanding your needs—we’re able to take full advantage of your parking system's potential. We’ll demonstrate how to increase revenue and reduce expenses—all while providing the utmost in customer service.</p>
                        <br>


                        <a class="showmorebutton"><strong id="demo">Read More</strong> <i class="fa fa-caret-right" aria-hidden="true"></i></a>

                        <h3 class=" showmorecontent">Services include:</h3>
                        <ul class=" showmorecontent">

                            <li>Parking Management</li>
                            <li>Parking Consulting</li>
                            <li>Transportation</li>
                            <li>Valet Services & Events</li>
                            <li>Concierge & Directions (way finding)</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="leasing">POWER WASHING</h2>
                        <p>Coming soon!</p>

                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
