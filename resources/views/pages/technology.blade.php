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
                            <h1>Integrating new technologies.</h1>

                            <p class="service-text">CarPark has built a reputation for excellence by offering brand services to our clients through advancing technology in parking solutions. We possess the expertise and sophisticated software to guide your facility towards fully automated systems. What’s the return on your investment? How does improved performance of the property, increased cash flow and lower operating expenses sound?
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








    </div>
@endsection
