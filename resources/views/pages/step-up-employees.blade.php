@extends('layouts.default')

@section('content')
    @include('partials.top-copy')

    <div class="page page-step-up-employees">
        <section class="section-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        @include('partials.logo-container')

                        <div class="nav-padding fade-in-up animate-enter allow-activate-on-load">
                            <h1>Our Employees Step Up for YOU too!</h1>

                            <p>
                                We don't just want educated employees at CarPark, we want people who are passionate about their
                                work. The 3-Point Employee Step Up Plan discusses customer service standards, learning objective
                                modules, and the approach and design of the final training deliverables. By completing this
                                program, our employees will be expertly prepared to meet our commitment to clients through
                                lasting impression, respond proactively to customers and each other, ensure every interaction
                                exceeds expectations and, resolve all issues in the best way possible.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="/images/bg-employees-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-training">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 fade-in-up animate-enter">
                        <div class="nav-padding">
                            <h1>We Train Hard to Impress.</h1>

                            <p>
                                We love to make our clients look amazing in the eyes (and hearts) of their customers - and
                                our 3-point Employee Step Up Plan will help do just that. This innovative training program
                                teaches employees how to create memorable customer experiences and how to go above and
                                beyond to ensure every customer interaction makes a memorable and lasting impression.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <img src="/images/bg-employees-2.jpg" alt="" class="arrow-image slide-in-left animate-enter">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
