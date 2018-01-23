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
                            <h1>CarPark Step Up to the Four<br>Customer Promises Training<br>Program - Participant Learning<br>Evaluation</h1>


                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 contact-form-container col-sm-offset-1" style="margin-top: 10rem;">



                    <form method="POST" action="/employeeonly">
                        {!! csrf_field() !!}
                        <div class="form-group">

                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                        </div>



                        <br>
                        <button href="#" class="link-cta" role="button">Submit</button>
                        {{--<button class="btn btn-primary btn-lg">Submit</button>--}}
                    </form>
                        {{--<div>--}}
                            {{--Email--}}
                            {{--<input type="email" name="email" value="{{ old('email') }}">--}}
                        {{--</div>--}}

                        {{--<div>--}}
                            {{--Password--}}
                            {{--<input type="password" name="pass" id="pass">--}}
                        {{--</div>--}}

                        {{--<div>--}}
                            {{--<input type="checkbox" name="remember"> Remember Me--}}
                        {{--</div>--}}

                        {{--<div>--}}
                            {{--<button type="submit">Login</button>--}}
                        {{--</div>--}}
                    </form>























                    {{--{!! Form::close() !!}--}}
                </div>
            </div>
        </div>
    </div>
@endsection
