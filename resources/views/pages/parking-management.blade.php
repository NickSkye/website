@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-parking-management">
        <main class="section-main">
            <div class="container-fluid">
                <div class="col-sm-8 col-md-6">
                    @include('partials.logo-container')

                    <div class="nav-padding">
                        <h1 class="fade-in-up animate-enter allow-activate-on-load">We're the Perfect Spot for Parking Management.</h1>

                        <p class="fade-in-up animate-enter allow-activate-on-load">
                            At CarPark, we treat parking management like a science, because it is. We've put the industry
                            under a microscope and have studied and dissected every piece of it until we became total
                            experts. Why did we choose to become so thorough? Because we are passionate about what we do
                            and, more importantly, obsessed with helping our clients succeed. We also believe parking is
                            more than just resting cars on designated pieces of asphalt. It's the beginning of an experience
                            for your customers. It's something that can enhance their activity before it even starts. The
                            space where people park can set the tone for whatever they're doing and may be the deciding
                            factor for whether or not they return. CarPark wants to provide a parking experience for your
                            customers that will make for a great first impression and a lasting one as well.
                        </p>

                        <p class="fade-in-up animate-enter allow-activate-on-load">
                            To provide our clients with optimal value and experience, CarPark developed two STEP UP
                            procedural plans, one for customers and one for our employees. Both plans were designed to help
                            maximize revenue, minimize operating expenses, and deliver a higher level of customer experience
                            and satisfaction.
                        </p>

                        <p class="fade-in-up animate-enter allow-activate-on-load">
                            Ultimately, we want to have a close relationship with out clients and to have them trust us
                            completely, which is why we have become so entrenched in the parking management industry and
                            know every space in it. After all, you can't really trust anyone with your business unless they
                            have proven they know it and love it just as much as you.
                        </p>

                        <div class="fade-in-up animate-enter allow-activate-on-load">
                            <a href="#" class="link-cta">Step Up plan for customers</a><br>
                            <a href="#" class="link-cta">Step Up plan for employees</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 hidden-xs">
                    <img src="/images/bg-parking-management-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load">
                    <div class="clearfix"></div>
                    <br>
                    <img src="/images/bg-parking-management-2.jpg" alt="" class="arrow-image slide-in-left animate-enter">
                </div>
            </div>
        </main>
    </div>
@endsection
