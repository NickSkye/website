@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-step-up-customers">
        <header class="section-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-md-1">
                        @include('partials.logo-container-large')
                    </div>
                    <div class="col-sm-4 col-md-offset-3 col-md-8 hidden-xs no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="step-up-header">
                            <h1>Step Up and CarPark It!</h1>

                            <div class="clearfix"></div>

                            <p class="service-text large-copy" id="header-text" style="">
                                Our Customer Step Up Plan is a one-of-a-kind program that separates us from the competition. It is designed for our clients to gain a competitive advantage, and help create value that will lead to new revenue streams.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row step-up-row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center-step-up">
                        <h1><img class="logo-service" src="/images/step-up-1.jpg">STEP 1 - RESEARCH</h1>
                        <p class="service-text large-copy">
                            The plan consists of 4 important steps in parking management, and it all begins with RESEARCH. To properly assess a parking facility, CarPark offers a property review before developing a proposal or making any recommendations. We spend a significant amount of time reviewing the operation, identifying potential sources of additional revenue within the neighborhood, quantifying the demographics, and assessing parking rate and time increments for maximization of revenues. Once we have completed our review, our service offering and assessment will be of use in creating value and future revenue growth for our clients.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <img src="/images/arrow-menu.png" alt="" class="section-arrow">
            </div>

            <div class="row step-up-row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center-step-up">
                        <h1><img class="logo-service" src="/images/step-up-2.jpg">STEP 2 - REVENUE</h1>
                        <p class="service-text large-copy">
                            This is where we focus on how each budget line item can impact financial performance and either improve or diminish Net Operating Income (NOI). Careful analysis of each revenue control equipment function allows us to work with the PARCS vendors and manufacturers to ensure there are no potential opportunities for employees to disable its control features or jeopardize our ability to track and control all revenue, all the time. We aggressively research new technologies and other methods of operation to continually reduce costs while focusing on enhancing customer service and identifying new revenue streams.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <img src="/images/arrow-menu.png" alt="" class="section-arrow">
            </div>

            <div class="row step-up-row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="text-center-step-up">
                        <h1><img class="logo-service" src="/images/step-up-3.jpg">STEP 3 - REPORTING</h1>
                        <p class="service-text large-copy">
                            The right reporting and analysis strategy can have a significant impact on an organization, fundamentally changing the way people perform their jobs and how decisions are made. Utilizing our proprietary revenue collection software, we’re able to offer real-time revenue reporting and data analysis, providing complete transparency within the operation. Clients can log into our cloud-based portal and review current and historical financial performance on any device. This technology is also used for on-site personnel, allowing them to clock in/out, track breaks, and issue patron tickets in every case, reducing fraud and potential revenue slippage. The time spent by our supervisors managing payroll can now be spent on continued research and pursuit of additional revenue sources. Our philosophy is simple: Allow technology to liberate our company and staff from mundane, repetitive tasks in order to create more value and services for our clients.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <img src="/images/arrow-menu.png" alt="" class="section-arrow">
            </div>

            <div class="row step-up-row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="text-center-step-up">
                        <h1><img class="logo-service" src="/images/step-up-4.jpg">STEP 4 - RECONCILATION</h1>
                        <p class="service-text large-copy">
                            This last step includes the compilation of all collected data and the implementation of our audit program to ensure correct shift reporting and daily account balances are matched to bank records and deposit details. All shift reports, validation and ticket exception logs, monthly permit records, and card key deposits are matched and reviewed by our financial review team to make sure all received revenues match the daily bank account deposit records. This audit also includes a cash composition review to make sure that all company procedures are followed without exception, that every transaction is recorded properly, and that all revenues are accounted for and deposited promptly. In other words, we offer complete transparency to give you the full picture and peace of mind. We call it a step up from any other parking and valet management company.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
