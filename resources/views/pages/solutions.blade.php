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
                            <section id="services-header" class="large-copy bg-arrow-image-sm-solutions animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>Dedicated to finding solutions for you.</h1>

                            <p class="service-text">CarPark has a comprehensive range of parking related solutions. From management to consulting, transportation to valet services, events to concierge, plus we also provide directional assistance. Our clients choose us for one simple reason—we’re the best choice for their parking management needs. When it comes to your next project, talk to us. We’ll provide the right solution while enhancing your overall customer experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image-solutions animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>
        <div class="container-fluid first-green" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right"  style="padding-left: 0; padding-right: 0;">
                            <img src="/images/parking-management.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/parking-management.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="management">Parking Management.</h2>
                        <p>CarPark excels at operating and managing parking facilities as an extended brand of the property. By truly understanding your needs—we’re able to take full advantage of your parking system's potential. We’ll demonstrate how to increase revenue and reduce expenses—all while providing the utmost in customer service.</p>
                        <br>
                        {{--<h3 class="">Services include:</h3>--}}
                        {{--<ul class="">--}}


                            {{--<li>Parking Consulting</li>--}}
                            {{--<li>Leasing</li>--}}
                            {{--<li>Transportation</li>--}}
                            {{--<li>Valet Services</li>--}}
                            {{--<li>Event Parking</li>--}}
                            {{--<li>Concierge & Wayfinding</li>--}}
                            {{--<li>Maintenance</li>--}}
                        {{--</ul>--}}
                        {{--<br>--}}

                            <a class="showmorebutton" ><w id="moresolutions">SEE ALL SOLUTIONS <i class="fa fa-caret-right" aria-hidden="true"></i></w></a>
                        </div>


                    </div>

                </div>
            </div>
        </div>





        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greybar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/leasing.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/leasing.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="leasing">Leasing.</h2>
                        <p>Turn to CarPark when you’re seeking an operator that’s able to bear full responsibility of managing your parking facility. Our lease contracts are driven by strength and performance. It’s about maximizing your payment while minimizing expenses that come from various parking requirements. Say goodbye to valet hassles forever with CarPark’s unique leasing arrangements. We tailor our programs to include flat, fixed or percentage rent parking agreements. Your customers will receive the royal treatment. You’ll reduce risk while pocketing guaranteed monthly income.</p>
                        <br>
                        <a href="/contact" class="generic-butt">GET MORE INFORMATION <i class="fa fa-caret-right" aria-hidden="true"></i></a>

                    </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/Parking_Consultant_page-headers.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Parking_Consultant_page-headers.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                            <h2 id="consulting">Parking Consulting.</h2>
                            <p>CarPark provides a wide range of consulting services for our clients to identify the most cost-effective and efficient options for achieving their objectives. Our expert specialists help you to better analyze, control, and manage the revenues and expenses for each of your facilities so you can take full advantage of your parking system's potential.</p>
                            <br>
                            <p>Our parking consulting services include:</p>
                            <div class="row">
                                <div class="col-sm-6">
                            <ul class="consult-list">
                                <li>Parking Facilities feasibility study.</li>
                                <li>Supply and Demand studies (Based on ULI & ITE).</li>
                                <li>Parking Operational review.</li>
                                <li>Revenue control and development consulting.</li>
                                <li>Parking vendor selection / RFP program.</li>
                            </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                <li>Parking Equipment Recommendations.</li>
                                <li>Parking Asset Management.</li>
                                <li>Accounting and Reporting Program Review/Recommendations.</li>
                                <li>Performance Audits.</li>
                            </ul>
                                </div>
                            </div>
                            <br>
                            <a href="/contact" class="generic-butt">LET'S ANALYZE YOUR FACILITIES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greybar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/transportation-logistics.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/transportation-logistics.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="transportations">Transportation Logistics.</h2>
                        <p>CarPark provides safe and reliable transportation services. Our professionally trained, courteous, uniformed, CD-licensed drivers have undergone thorough background checks and pre-screening evaluations.</p>
                        <br>
                        <p>We have our own fleet with shuttles in various sizes to accommodate most programs and we’re pleased to provide transportation services to facilitate alternative parking arrangements. Plus, we’re able to keep our fleet in top condition by maintaining regular schedules along pre-determined routes, so you’ll feel comfortable and in control.</p>
                        <br>
                        <a href="/contact" class="generic-butt">NEED TRANSPORTATION SERVICES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                    </div>

                </div>
            </div>
        </div>




        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/vallet.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/vallet.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="valet">Valet Services.</h2>
                        <p>Are you experiencing high-volume or turnovers? Do you have more vehicles than the number of allowed parking spaces? CarPark can provide the right solution with specialized stacked or tandem parking. Our valet attendants are professional trained to provide your facility and your customers with an engaging and memorable parking experience.</p>
                        <br>
                        <a href="/contact" class="generic-butt">NEED VALET SERVICES <i class="fa fa-caret-right" aria-hidden="true"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greybar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/Event_page-headers.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Event_page-headers.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="event">Event Parking.</h2>
                        <p>For more than two decades, CarPark has been providing exceptional event parking services for clients such as Twentieth Century Fox, the Oscars and Emmy Awards after parties. Regardless of size, attendance or space limitations—our management team will work closely to develop and implement a full operation and logistics plan. Plus all our parking attendants, managers, supervisors and directors of operation are required to go through our extensive Step Up Plan. So you can rest assured that the parking activities will run smoothly and efficiently. </p>


                        {{--<h3>Services include:</h3>--}}
                        {{--<ul>--}}

                            {{--<li>Valet Parking</li>--}}
                            {{--<li>Traffic Control</li>--}}
                            {{--<li>Door Attendants</li>--}}
                            {{--<li>Greeter</li>--}}
                            {{--<li>Concierge</li>--}}
                            {{--<li>Shuttle Services</li>--}}
                            {{--<li>Golf Carts</li>--}}
                        {{--</ul>--}}
                        <br>
                        <a href="/contact" class="generic-butt">HAVE AN EVENT <i class="fa fa-caret-right" aria-hidden="true"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>







        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/Concierge_page-headers.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Concierge_page-headers.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="">Concierge & Wayfinder.</h2>
                        <p>Our Concierge Ambassador services provide general assistance to patients, visitors and staff for daily, monthly, survey and production parking locations. By understanding the layout of your facility, the Ambassador significantly increases the smoothness of a front drive. Visitors will receive detailed directions from a reliable source. In addition, the Ambassador maintains accurate and comprehensive logbooks of packages, mail and other items received. Plus, they’ll also orchestrate delivery of necessary items should the need arise. The Ambassador also acts as an eye in the sky, alerting the appropriate personnel of any suspicious activity or unsafe driving conditions.</p>
                        <br>
                        <a href="/contact" class="generic-butt">CONCIERGE SERVICES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid  showmorecontent" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greybar">
                <div class=" col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/Maintenance_page-headers.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Maintenance_page-headers.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7" data-aos="fade-up">
                        <h2 id="maintenance">Maintenance.</h2>
                        <p>CarPark also specialize in parking lot maintenance and repair. We excel at operating and managing parking facilities as an extended brand of the property. By truly understanding your needs—we’re able to take full advantage of your parking system's potential. We’ll demonstrate how to increase revenue and reduce expenses—all while providing the utmost in customer service. We handle all Stripe and Powerwash services accurately with a detailed assessment of every lot for the best solution. </p>
                        <br>
                        <a href="/contact" class="generic-butt">NEED MAINTENANCE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>



        {{--<div class="container-fluid  showmorecontent" style="padding-left: 0;">--}}
            {{--<div class="row no-padding content-whitebar">--}}
                {{--<div class="col-md-offset-1 col-md-9">--}}
                    {{--<div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">--}}

                        {{--<h2 id="reserve">Hey, that's my spot.</h2>--}}

                        {{--<p class="service-text">--}}
                            {{--<strong id="daily" class="greentext">Daily</strong><br>Locate and reserve daily and hourly parking prior to driving.<br>--}}
                            {{--<a href="#">SELECT YOUR SPOT <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>--}}
                            {{--<strong id="monthly" class="greentext">Monthly</strong><br>Looking for long-term parking? Reserve it for a month.<br>--}}
                            {{--<a href="#">PURCHASE YOUR PASS <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>--}}
                            {{--<strong id="filming" class="greentext">Filming</strong><br>Need to be on-set? We handle production parking as well.<br>--}}
                            {{--<a href="#">LOCATIONS AVAILABLE <i class="fa fa-caret-right" aria-hidden="true"></i></a> <br><br>--}}
                        {{--</p>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}




        <div class="container-fluid showmorecontent hidden" style="padding-left: 0;">
            <div class="row no-padding-lr content-whitebar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">

                        <h2 id="management">RESTRIPING</h2>
                        <p>CarPark excels at operating and managing parking facilities as an extended brand of the property. By truly understanding your needs—we’re able to take full advantage of your parking system's potential. We’ll demonstrate how to increase revenue and reduce expenses—all while providing the utmost in customer service.</p>
                        <br>

                        <a href="/contact"><p>Talk to us in regards to restriping!</p></a>





                    </div>

                </div>
            </div>
        </div>



        <div class="container-fluid  showmorecontent hidden" style="padding-left: 0;">
            <div class="row no-padding content-greybar">
                <div class="col-md-offset-1 col-md-9">
                    <div class="inside-green" >

                        <h2 id="leasing">POWER WASHING</h2>
                        <p>Coming soon!</p>
                        <br>
                        <a href="/contact"><p>Talk to us in regards to power washing!</p></a>

                    </div>

                </div>
            </div>
        </div>






        <div class="container-fluid hidden-sm hidden-xs hidden-md hidden-lg">
            <div class="row services-row">
                <div class="col-md-8 col-md-offset-2 large-copy">
                    <div class="text-center-services">
                        <h2>PARKING CONSULTING</h2>
                        <p class="service-text">
                            We provide a wide range of consulting services for our clients to identify the most cost-effective and efficient options for achieving their objectives. Our expert specialists help you to better analyze, control, and manage the revenues and expenses for each of your facilities so you can take full advantage of your parking system's potential.
                        </p>
                    </div>
                    <p><strong>Parking consulting services include:</strong></p>
                    <br>
                    <div class="consulting-list large-copy">
                        <ul class="consult-list">
                            <li>Accounting and reporting program review and recommendations</li>
                            <li>Parking asset management</li>
                            <li>Parking equipment recommendations</li>
                            <li>Parking vendor selection</li>
                            <li>Revenue control and development consulting</li>
                            <li>Parking operations review</li>
                            <li>Performance audits</li>
                        </ul>
                    </div>

                    <p>Want to know more? <a href="/contact">Contact Us</a></p>

                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center-services row large-copy">
                    <div class="col-sm-3">
                        <a class="logo-service" href="#valet">
                            <img src="/images/services-logo-1.jpg">
                            <p>Valet Services</p>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="logo-service" href="#event">
                            <img src="/images/services-logo-2.png">
                            <p>Event Parking</p>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="logo-service" href="#shuttle">
                            <img src="/images/services-logo-3.png">
                            <p>Shuttle Service</p>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="logo-service" href="#concierge">
                            <img src="/images/services-logo-4.png">
                            <p>Concierge</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row services-row" id="valet">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center-services">
                        <h1>VALET SERVICES</h1>

                        <p class="service-text">
                            Our clients can be assured that they will always expect a high level of service for their parking operation. All valet attendants are professional and trained to engage every guest with a pleasant greeting, eye contact, and happiness to offer any assistance. CarPark's valet team is dedicated to providing an enhanced guest experience by making each interaction engaging, enjoyable, memorable, and professional.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row services-row" id="event">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="text-center-services">
                        <h2>EVENT PARKING</h2>

                        <p class="service-text">
                            For the past 20 years, CarPark has been providing exceptional service for event parking. Regardless of event size, attendance, and space limitations, our management team will work closely with you to develop a comprehensive operation plan to ensure the parking activities run smoothly and efficiently. Plus, all our parking attendants, managers, supervisors, and directors of operation are required to go through our extensive Step Up Plan for Employees.
                        </p>
                    </div>
                    <p class="service-text">
                        <strong>Event parking services include:</strong>
                    </p>
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-4 large-copy text-left">
                        <ul class="event-parking-list">
                            <li>Valet parking</li>
                            <li>Traffic control</li>
                            <li>Door attendants</li>
                            <li>Greeter</li>
                        </ul>
                    </div>
                    <div class="col-md-4 large-copy text-left">
                        <ul class="event-parking-list">
                            <li>Concierge</li>
                            <li>Shuttle Services</li>
                            <li>Golf carts</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row services-row" id="shuttle">
                <div class="col-md-8 col-md-offset-2 text-center-services">
                    <div class="text-center-services">
                        <h2>SHUTTLE SERVICES</h2>
                        <p class="service-text">
                            CarPark provides safe and reliable transportation services with professionally-trained, courteous, uniformed, CD-licensed drivers who have undergone thorough background checks and pre-screening evaluations.
                            <br/>
                            We have our own fleet with shuttles in various sizes to accommodate most programs, and we are pleased to provide a transportation service to facilitate alternative parking arrangements. We maintain regular schedules along pre-determined routes as required by your customers' needs and keep our fleet in top condition for their comfort.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row services-row" id="concierge">
                <div class="col-md-8 col-md-offset-2 text-center-services">
                    <div class="text-center-services">
                        <h2>CONCIERGE</h2>
                        <p class="service-text">
                            The CarPark Concierge Ambassador services provide general assistance to patients, visitors, and staff. By knowing the layout of the facility, the Concierge Ambassador is invaluable to the smooth operations of a front drive. The Concierge Ambassador offers directions to visitors and serves as a reliable source of information. In addition, the Concierge Ambassador maintains accurate and comprehensive logbooks of packages, mail, and items received and will orchestrate delivery of these items when necessary. The Concierge Ambassador will also alert appropriate personnel if suspicious activity is identified and will report any unsafe driving conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
