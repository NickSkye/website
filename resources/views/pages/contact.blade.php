@extends('layouts.default')

@section('content')
    @include('partials.top-copy')

    <div class="page page-generic">
        <div class="container-fluid">
            <div class="row">
                <div class="hidden-sm col-md-5">
                    @include('partials.logo-container-large')
                    <div>
                        <div class="small-center col-md-offset-1">
                            <h1>Your partner in success.</h1>

                            <p class="service-text">Even though we’re based in glamorous Hollywood, we’re not out of reach for your next parking project. CarPark is the local experts throughout the area and we know the best ways to optimize your transportation needs while increasing revenue. So, when we say we’re there for you—we are. Our innovative solutions have worked wonders for office buildings, airports, municipal, residential, retail, mixed-use, hotels, entertainment venues and hospitals throughout the region. We serve an increasingly diverse clientele including The Roosevelt, 1600 Vine, Brookman Lofts, Gateway Building, and the Dynasty Building to name a few.<br><br>So take a closer look at CarPark. Share your parking dilemma with us. We’d love to listen. Give Joe, our CEO a call today—you’ve got his ear.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 contact-form-container col-sm-offset-1">



                    <h1 style="margin-top: 175px;">Talk To Us!</h1>

                    <form action="contact/submit" class="contact-form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">

                            <textarea class="form-control" id="message" name="messbody" placeholder="Message" rows="4"></textarea>
                        </div>

                       <br>
                        <button href="#" class="link-cta" role="button">Submit</button>
                        {{--<button class="btn btn-primary btn-lg">Submit</button>--}}
                    </form>























                    {{--{!! Form::close() !!}--}}
                </div>
            </div>
        </div>
    </div>
@endsection
