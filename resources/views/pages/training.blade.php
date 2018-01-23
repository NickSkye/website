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
                            <h1>We’re not just teaching mannerism,<br>
                                we’re shaping minds.</h1>

                            <p class="service-text">With an aim to always expand and improve upon the overall customer experience, everyone in our organization is required to go through Guest Courtesy Training (GCT) and Health Care Parking Management Training (HCPMT).</p>

                            <ul>
                                <li><strong>Time to stop talking and start acting—</strong> GCT is a series of proven methods of providing excellence customer service. Specifically, it’s designed to educate attendants to act in a professional, predictable and respectful manner throughout all interaction with guests and visitors. </li>
                                <li><strong>In blooming good health—</strong> HCPMT is a comprehensive program that teaches and cultivates our employees’ skills working at health care and medical centers. Professionals in the Joint Commission and HIPAA regulation industries created the HCPMT workshop.  </li>
                            </ul>


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
