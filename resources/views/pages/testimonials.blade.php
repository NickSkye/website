@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-testimonials">
        <header class="section-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-md-1">
                        @include('partials.logo-container-large')
                    </div>
                    <div class="col-md-4 col-md-offset-3 col-md-8 hidden-xs no-padding">
                        <div class="large-copy bg-arrow-image">
                            <h1>Testimonials</h1>

                            <p class="service-text" style="color: #ddd;">
                                We at CarPark don’t believe in patting ourselves on the back for the work we do. But if our customers want to do so, we’re fine with that. It’s their opinions and experiences that matter most. It’s why we do what we do. It’s why they’re part of our family. See for yourself.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{--<div class="container-fluid">--}}
            {{--<div class="row services-row">--}}
                {{--<div class="col-md-8 col-md-offset-2 large-copy">--}}
                    {{--<div class="text-center-services">--}}
                        {{--<h1>OFFICE BUILDINGS</h1>--}}
                        {{--<p class="service-text">--}}
                            {{--CarPark has been around the block, many times. We have over 20 years of experience in managing all aspects parking operations in the office building and multi-use complexes. Since each office facility is different, we tailor a specific parking management solution for each property. Combining our best practices in facility management with our newest technology enables us to provide the best parking solution to increase revenue and reduce operating expenses, all while delivering high levels of customer service.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection
