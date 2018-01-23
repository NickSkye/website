@extends('layouts.default')

@section('content')
    @include('partials.top-copy')
    <div class="page page-segments">
        <div id="fade" class="black_overlay"></div>

        {{--<div id="light1" class="white_content container-fluid" onclick="document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'" style="padding-left: 0;">--}}
        {{--<div class="row no-gutters" style="min-height: 500px;">--}}
        {{--<div class="col-xs-12 col-sm-6 no-gutters left-div">--}}
        {{--<img src="/images/Joseph---large.jpg" alt="" class="bigpic hidden-xs">--}}
        {{--<img src="/images/Joseph.jpg" alt="" class="bigpic visible-xs">--}}
        {{--</div>--}}
        {{--<div class="col-sm-6" style="min-height: 500px; padding: 30px; padding-bottom: 0;">--}}
        {{--<p style="font-size: 10px;">Hands on. Inspirational. A role model. These are the responses you might hear when the staff describes their fearless leader—Joseph Gharib. The clients are equally as complementary—he’s innovative, a forward-thinker and passionate about increasing revenues.<br><br>Joseph started in the parking industry working for two major firms as a member of management. However, the leadership just wasn’t there. Uninspiring. No passion for improving their clients’ bottom line. It was a just a job and not a dedication.<br><br>The time was right to breakout. Having just earned his MBA, Joseph was equipped with business knowledge. And his two previous employers provided him with hands on experience, so Joseph founded CarPark in 1994.<br><br>Since then, CarPark has grown to be a premier provider of parking and transportation management services to a diverse group of real estate professionals. Joseph’s hands on approach assures every client that the operator responsible for managing their facility will bring innovative solutions to improve revenues and minimize operating expenses.--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row greenbottom">--}}
        {{--<div class="col-xs-12">--}}
        {{--<div class="text-center whitetext">--}}
        {{--<h2 class="whitetext" style="margin-top: 50px;">Joseph Gharib</h2>--}}
        {{--<h4>President and CEO</h4></div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--START TEST--}}
        <div id="bio1" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/Joseph.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>Joseph Gharib</strong></p>
                    <p style="color: gray;">President and CEO</p>
                    <p style="font-size: 14px; color: gray;">Hands on. Inspirational. A role model. These are the responses you might hear when the staff describes their fearless leader—Joseph Gharib. The clients are equally as complementary—he’s innovative, a forward-thinker and passionate about increasing revenues.<br><br>Joseph started in the parking industry working for two major firms as a member of management. However, the leadership just wasn’t there. Uninspiring. No passion for improving their clients’ bottom line. It was a just a job and not a dedication.<br><br>The time was right to breakout. Having just earned his MBA, Joseph was equipped with business knowledge. And his two previous employers provided him with hands on experience, so Joseph founded CarPark in 1994.<br><br>Since then, CarPark has grown to be a premier provider of parking and transportation management services to a diverse group of real estate professionals. Joseph’s hands on approach assures every client that the operator responsible for managing their facility will bring innovative solutions to improve revenues and minimize operating expenses.
                    </p>
                </div>
            </div>
        </div>


        <div id="bio2" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/Mike.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>Mike Marji</strong></p>
                    <p style="color: gray;">Vice President, Operations</p>
                    <p style="font-size: 14px; color: gray;">Mike has been a member of CarPark’s executive team since 2005 and is responsible for the company’s diverse operations. He brings more than 25 years of leadership and business acumen to empower his operating team. With a deep focus on enhancing customer service delivery, he’s able to deploy new technologies to improve operations. Mike possesses a PhD in civil and industrial engineering, plus he holds a Masters Degree in Finance and Business Management. This unique combination makes Mike an indispensable resource for our clients in need of due diligence and assistance with facility design.
                    </p>
                </div>
            </div>
        </div>


        <div id="bio3" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/Susan.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>Susan Charif</strong></p>
                    <p style="color: gray;">Director of Human Resources</p>
                    <p style="font-size: 14px; color: gray;">Susan’s critical position is labor intensive, for a service provider firm such as CarPark. The ability to properly recruit, train and retain exceptional employees cannot be underestimated. Her vast experience in a variety of service firms provides CarPark with the means to deliver optimum results.<br><br>She’s a member of the Society for Human Resource Management (SHRM) and is currently completing her certification for a Senior Professional In Human Resources (SPHR). Susan’s depth of experience is frequently called upon to assist our operating teams
                        for improving their clients’ bottom line.
                    </p>
                </div>
            </div>
        </div>

        <div id="bio5" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/david.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>David Gharib</strong></p>
                    <p style="color: gray;">Supervisor</p>
                    <p style="font-size: 14px; color: gray;">

                    </p>
                </div>
            </div>
        </div>

        <div id="bio6" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/omar.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>Omar Kapaje</strong></p>
                    <p style="color: gray;">Supervisor</p>
                    <p style="font-size: 14px; color: gray;">
                        {{----}}
                    </p>
                </div>
            </div>
        </div>


        <div id="bio4" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/Sid.png" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>Sid Mocon</strong></p>
                    <p style="color: gray;">Director of Finance</p>
                    <p style="font-size: 14px; color: gray;">Sid is responsible for client reporting, internal auditing, proper reconciliation and guardian of all collected revenues. His experience as a Senior Accountant and Controller prepared him for the demands that this job requires. The rigorous attention-to-detail as a custodian of our client’s assets must be maintained and supported throughout the organization. Sid works feverishly to meet our clientele’s specific reporting needs, by tailoring their monthly newsgathering. He’s instrumental in advancing CarPark’s technologies to reduce costs while improving client financial documentation delivery.
                    </p>
                </div>
            </div>
        </div>

        <div id="bio7" class="container-fluid" style="position:fixed; ">
            <div class="row">
                <i class="fa fa-times fa-2x" style="position: absolute; top: 3%; right: 2%;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 biotop">

                    <img src="/images/justin.jpg" alt="" class="bigpic">
                </div>
                <div class="col-sm-5 col-sm-offset-1 biotop">
                    <p class="greentext"><strong>JUSTIN J MONTELEONE</strong></p>
                    <p style="color: gray;">Senior Vice President, Business Development </p>
                    <p style="font-size: 14px; color: gray;">Justin brings over 5 years of transportation and sales leadership to the Carpark team. He has worked extensively with countless transportation companies in a variety of markets including parking, shuttle and ride sharing, as well as International Imports and

                        Exports. With this knowledge, Justin finds and develops transportation/Supply Chain solutions based on the needs of each of his clients.

                        He has previously served as the VP of Business Development with the nation’s largest personal driver service, and provided consultation and services for the largest parking operator, SP Plus. Justin has been involved in securing new parking and transportation contracts in Commercial Real Estate, Luxury Residential, Hospitality, and others.
<br>
                        Justin completed his schooling at California State University, Fullerton with Supply Chain Operations, and currently lives in Santa Monica.
                    </p>
                </div>
            </div>
        </div>
        {{--END TEST--}}


        {{--<div id="light2" class="white_content container-fluid" onclick="document.getElementById('light2').style.display='none';document.getElementById('fade').style.display='none'" style="padding-left: 0;">--}}
        {{--<div class="row no-gutters" style="min-height: 500px;">--}}
        {{--<div class="col-xs-12 col-sm-6 no-gutters left-div">--}}
        {{--<img src="/images/mike-marj---big.jpg" alt="" class="bigpic hidden-xs">--}}
        {{--<img src="/images/mike-marji.jpg" alt="" class="bigpic visible-xs">--}}
        {{--</div>--}}
        {{--<div class="col-sm-6" style="min-height: 500px; padding: 30px; padding-bottom: 0;">--}}
        {{--<p style="font-size: 10px;">Mike has been a member of CarPark’s executive team since 2005 and is responsible for the company’s diverse operations. He brings more than 25 years of leadership and business acumen to empower his operating team. With a deep focus on enhancing customer service delivery, he’s able to deploy new technologies to improve operations. Mike possesses a PhD in civil and industrial engineering, plus he holds a Masters Degree in Finance and Business Management. This unique combination makes Mike an indispensable resource for our clients in need of due diligence and assistance with facility design.--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row greenbottom">--}}
        {{--<div class="col-xs-12">--}}
        {{--<div class="text-center whitetext"><h2 class="whitetext" style="margin-top: 50px;">Mike Marji</h2>--}}
        {{--<h4>Vice President, Operations</h4></div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}


        {{--<div id="light3" class="white_content container-fluid" onclick="document.getElementById('light3').style.display='none';document.getElementById('fade').style.display='none'" style="padding-left: 0;">--}}
        {{--<div class="row no-gutters" style="min-height: 500px;">--}}
        {{--<div class="col-xs-12 col-sm-6 no-gutters left-div">--}}
        {{--<img src="/images/susan-charif-large.jpg" alt="" class="bigpic hidden-xs">--}}
        {{--<img src="/images/susan-charif.jpg" alt="" class="bigpic visible-xs">--}}
        {{--</div>--}}
        {{--<div class="col-sm-6" style="min-height: 500px; padding: 30px; padding-bottom: 0;">--}}
        {{--<p style="font-size: 10px;">Susan’s critical position is labor intensive, for a service provider firm such as CarPark. The ability to properly recruit, train and retain exceptional employees cannot be underestimated. Her vast experience in a variety of service firms provides CarPark with the means to deliver optimum results.<br><br>She’s a member of the Society for Human Resource Management (SHRM) and is currently completing her certification for a Senior Professional In Human Resources (SPHR). Susan’s depth of experience is frequently called upon to assist our operating teams--}}
        {{--for improving their clients’ bottom line.--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row greenbottom">--}}
        {{--<div class="col-xs-12">--}}
        {{--<div class="text-center whitetext"><h2 class="whitetext" style="margin-top: 50px;">Susan Charif</h2>--}}
        {{--<h4>Director of Human Resources</h4></div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div id="light4" class="white_content container-fluid" onclick="document.getElementById('light4').style.display='none';document.getElementById('fade').style.display='none'" style="padding-left: 0;">--}}
        {{--<div class="row no-gutters" style="min-height: 500px;">--}}
        {{--<div class="col-xs-12 col-sm-6 no-gutters left-div">--}}
        {{--<img src="/images/sid-large.jpg" alt="" class="bigpic hidden-xs">--}}
        {{--<img src="/images/sid.jpg" alt="" class="bigpic visible-xs">--}}
        {{--</div>--}}
        {{--<div class="col-sm-6" style="min-height: 500px; padding: 30px; padding-bottom: 0;">--}}
        {{--<p style="font-size: 10px;">Sid is responsible for client reporting, internal auditing, proper reconciliation and guardian of all collected revenues. His experience as a Senior Accountant and Controller prepared him for the demands that this job requires. The rigorous attention-to-detail as a custodian of our client’s assets must be maintained and supported throughout the organization. Sid works feverishly to meet our clientele’s specific reporting needs, by tailoring their monthly newsgathering. He’s instrumental in advancing CarPark’s technologies to reduce costs while improving client financial documentation delivery.--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row greenbottom">--}}
        {{--<div class="col-xs-12">--}}
        {{--<div class="text-center whitetext"><h2 class="whitetext" style="margin-top: 50px;">Sid Mocon</h2>--}}
        {{--<h4>Director of Finance</h4></div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div id="light5" class="white_content container-fluid" onclick="document.getElementById('light5').style.display='none';document.getElementById('fade').style.display='none'" style="padding-left: 0;">
            <div class="row no-gutters" style="min-height: 500px;">
                <div class="col-xs-12 col-sm-6 no-gutters left-div">
                    <img src="/images/Joseph.jpg" alt="" class="bigpic">
                </div>
                <div class="col-sm-6" style="min-height: 500px; padding: 30px; padding-bottom: 0;">
                    <p style="font-size: 10px;">Hands on. Inspirational. A role model. These are the responses you might hear when the staff describes their fearless leader—Joseph Gharib. The clients are equally as complementary—he’s innovative, a forward-thinker and passionate about increasing revenues.<br><br>Joseph started in the parking industry working for two major firms as a member of management. However, the leadership just wasn’t there. Uninspiring. No passion for improving their clients’ bottom line. It was a just a job and not a dedication.<br><br>The time was right to breakout. Having just earned his MBA, Joseph was equipped with business knowledge. And his two previous employers provided him with hands on experience, so Joseph founded CarPark in 1994.<br><br>Since then, CarPark has grown to be a premier provider of parking and transportation management services to a diverse group of real estate professionals. Joseph’s hands on approach assures every client that the operator responsible for managing their facility will bring innovative solutions to improve revenues and minimize operating expenses.
                    </p>
                </div>
            </div>
            <div class="row greenbottom">
                <div class="col-xs-12">
                    <div class="text-center">Joseph Gharib</div>

                </div>
            </div>
        </div>


        <header class="section-header">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row" style="margin-left: 0;">
                    <div class="col-md-offset-1 col-sm-12 col-md-4" style="padding-left: 0; padding-right: 0;">

                        @include('partials.logo-container-large')
                        <div class="col-md-offset-1 col-md-6 visible-sm visible-xs no-padding">
                            <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                            <section id="services-header" class="large-copy bg-arrow-image-sm-about animated">

                            </section>
                        </div>
                        <div class="small-center">
                            <h1>CarPark Culture.</h1>

                            <p class="service-text">For more than two decades, CarPark has inspired more trust and greater loyalty into our staff and clientele while standing together with the community. By implementing our Step Up to the Four Promises plan for employees, it enables them to meet the commitment to those we serve. This dedicated customer care eliminates concerns while resolving challenges quickly and efficiently. The intensive classroom training involving Active Listening and Effective Questioning, prepares our staff to provide the ultimate customer experience. We’re a family to serve yours.
                                <a href="/contact">Talk to us, we’re all ears.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-6 hidden-xs hidden-sm no-padding">
                        <!-- <img src="/images/bg-services-1.jpg" alt="" class="arrow-image slide-in-left animate-enter allow-activate-on-load"> -->
                        <section id="services-header" class="large-copy bg-arrow-image-about animated">

                        </section>
                    </div>

                </div>
            </div>
        </header>

        <div class="container-fluid first-green" style="padding-left: 0; padding-right: 0;">
            <div class="row no-padding-lr content-greenbar">
                <div class="col-md-10">
                    <div class="inside-green" >
                        <div class="col-sm-5" data-aos="slide-right" style="padding-left: 0; padding-right: 0;">
                            <img src="/images/4r-small-pict.png" class="hidden-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                            <img src="/images/mobile/Revenue.jpg" class="visible-xs" style="width: 100%; height: auto; padding-top: 5%;" alt="">
                        </div>
                        <div class="col-sm-7">
                        <h2>You’re like family to us.</h2>
                        <p>Each employee is driven by strong passion and intense focus on the customer. By exhibiting superb problem-solving skills, talent and imagination, we’re able to diagnose your parking performance and thoroughly analyze your facility. Armed with this knowledge, we’re then in a unique position to increase your net operating income. Our complete transparency and consistent hard work will earn your trust. We take great pride in the service we provide and strive to enhance the entire parking experience for your customers.
                        </p>
                        {{--<h2 id="bios">Our Team</h2>--}}
                        <a class="showmorebutton" id="morebios">SEE OUR TEAM BIOS
                            <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid showmorecontent" id="bios" style="padding-left: 0;">
            <div class="row text-center no-padding content-greybar">
                <div class="col-md-offset-1 col-md-11">
                    <div class="inside-green" style="padding-top: 5%; padding-bottom: 5%;">


                        <div class="row">
                            <div id="bioimg1" class="col-md-4 col-lg-4 text-center pic">{{--onclick="document.getElementById('light1').style.display='block';document.getElementById('fade').style.display='block'" for lightbox--}}

                                <img src="/images/Joseph.png" class="overlay">
                                {{--<div class="overlay"></div>--}}
                                {{--<div class="info">--}}
                                {{--<p class="text"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>--}}

                                {{--</p>--}}
                                {{--</div>--}}
                                <h3 class="bioname">Joseph Gharib</h3>
                                <h3 class="title">President and CEO</h3>

                            </div>

                            <div id="bioimg2" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/Mike.png" class="overlay">
                                {{--<div class="overlay"></div>--}}
                                {{--<div class="info">--}}
                                {{--<p class="text"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></p>--}}
                                {{--<p class="hidden"> The clients are equally as complementary—he’s innovative, a forward-thinker and passionate about increasing revenues.<br><br>Joseph started in the parking industry working for two major firms as a member of management. However, the leadership just wasn’t there. Uninspiring. No passion for improving their clients’ bottom line. It was a just a job and not a dedication.<br><br>The time was right to breakout. Having just earned his MBA, Joseph was equipped with business knowledge. And his two previous employers provided him with hands on experience, so Joseph founded CarPark in 1994.<br><br>Since then, CarPark has grown to be a premier provider of parking and transportation management services to a diverse group of real estate professionals. Joseph’s hands on approach assures every client that the operator responsible for managing their facility will bring innovative solutions to improve revenues and minimize operating expenses.--}}

                                {{--</p>--}}
                                {{--</div>--}}
                                <h3 class="bioname">Mike Marji</h3>
                                <h3 class="title">Vice President, Operations</h3>

                            </div>

                            <div id="bioimg3" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/Susan.png" class="overlay">
                                {{--<div class="overlay"></div>--}}
                                {{--<div class="info">--}}
                                {{--<p class="text"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>--}}
                                {{--<p class="hidden"> The clients are equally as complementary—he’s innovative, a forward-thinker and passionate about increasing revenues.<br><br>Joseph started in the parking industry working for two major firms as a member of management. However, the leadership just wasn’t there. Uninspiring. No passion for improving their clients’ bottom line. It was a just a job and not a dedication.<br><br>The time was right to breakout. Having just  earned his MBA, Joseph was equipped with business knowledge. And his two previous employers provided him with hands on experience, so Joseph founded CarPark in 1994.<br><br>Since then, CarPark has grown to be a premier provider of parking and transportation management services to a diverse group of real estate professionals. Joseph’s hands on approach assures every client that the operator responsible for managing their facility will bring innovative solutions to improve revenues and minimize operating expenses.--}}

                                {{--</p>--}}
                                {{--</div>--}}

                                <h3 class="bioname">Susan Charif</h3>
                                <h3 class="title"> Director of Human Resources</h3>

                            </div>
                        </div>

                        <div class="row">
                            <div id="bioimg5" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/david.png" class="overlay">

                                <h3 class="bioname">David Gharib</h3>
                                <h3 class="title">Supervisor</h3>
                            </div>


                            <div id="bioimg6" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/omar.png" class="overlay">

                                <h3 class="bioname">Omar Kapaje</h3>
                                <h3 class="title">Supervisor</h3>
                            </div>


                            <div id="bioimg4" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/Sid.png" class="overlay">

                                <h3 class="bioname">Sid Mocon</h3>
                                <h3 class="title"> Director of Finance</h3>
                            </div>


                        </div>
                        <div class="row">
                            <div id="bioimg7" class="col-md-4 col-lg-4 text-center pic">
                                <img src="/images/justin.jpg" class="overlay">

                                <h3 class="bioname">Justin J Monteleone</h3>
                                <h3 class="title" style="line-height: 1.3;">Senior Vice President<br>Business Development </h3>
                            </div>


                            <div id="bioimg6" class="col-md-4 col-lg-4 text-center pic">

                            </div>


                            <div id="bioimg4" class="col-md-4 col-lg-4 text-center pic">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
