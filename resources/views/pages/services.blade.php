@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-services">
        <header class="section-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-1 col-sm-8 col-md-4">
                        @include('partials.logo-container-large')
                        <h1>Enhanced Parking Management and Valet Services</h1>

                        <p class="service-text">
                            Our clients choose us because they are confident in the knowledge that we are the best choice for their parking management needs. Whether it's gated and guarded parking for tenants, efficient and organized parking for events, or quick and courteous valet, talk to us and we will provide the right solution and enhance the customer experience.
                        </p>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy">

                        </section>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid hidden-sm hidden-xs" style="padding-left: 0;">
            <div class="row no-padding" style="background-color: lawngreen;">
                <div class="col-md-offset-1 col-md-9">
                    <div style="padding-top: 5%; padding-bottom: 5%;">
                        <p>"Lorem Ipsum jdhsfjhbsaj fdkufhksh fks ksdfk adfkj gsfgs dzgdsfgdfgfdsg hg fgsd gds fgdsf g gd"</p>
                        <h1>TEXT</h1>
                        <p>"Lorem Ipsum jdhsfjhbsaj fdkufhksh fks ksdfk adfkj"</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid visible-sm visible-xs">
            <div class="row services-row">
                <div class="col-md-8 col-md-offset-2 large-copy">
                    <div class="text-center-services">
                        <h1>PARKING CONSULTING</h1>
                        <p class="service-text">
                            We provide a wide range of consulting services for our clients to identify the most cost-effective and efficient options for achieving their objectives. Our expert specialists help you to better analyze, control, and manage the revenues and expenses for each of your facilities so you can take full advantage of your parking system's potential.
                        </p>
                    </div>
                    <p><strong>Parking consulting services include:</strong></p>
                    <br>
                    <div class="consulting-list large-copy">
                        <ul>
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
                        <h1>EVENT PARKING</h1>

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
                        <h1>SHUTTLE SERVICES</h1>
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
                        <h1>CONCIERGE</h1>
                        <p class="service-text">
                            The CarPark Concierge Ambassador services provide general assistance to patients, visitors, and staff. By knowing the layout of the facility, the Concierge Ambassador is invaluable to the smooth operations of a front drive. The Concierge Ambassador offers directions to visitors and serves as a reliable source of information. In addition, the Concierge Ambassador maintains accurate and comprehensive logbooks of packages, mail, and items received and will orchestrate delivery of these items when necessary. The Concierge Ambassador will also alert appropriate personnel if suspicious activity is identified and will report any unsafe driving conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
