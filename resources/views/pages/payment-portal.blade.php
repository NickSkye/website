@extends('layouts.default')

@section('content')
    @include('partials.top-copy')

    <div class="page page-payment-portal">
        <header class="section-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6">
                        @include('partials.logo-container')
                    </div>
                </div>
            </div>
        </header>

        <section class="section-payment">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="nav-padding">
                            <h1>Online payment portal for your convenience.</h1>

                            <p>
                                Life can get really busy. Having one less thing to worry about is always nice. That's
                                why you can pay and get it out of the way right here. Thanks for parking with us. See
                                you next time.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <h1>Customer Login</h1>

                        <div class="form-group">
                            <label for="user_id" class="hidden">User ID</label>
                            <input type="text" class="form-control" placeholder="User ID" name="user_id" id="user_id" value="{{ old('user_id') }}">
                        </div>

                        <div class="form-group">
                            <label for="password" class="hidden">User ID</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{ old('password') }}">
                        </div>

                        <div class="text-right">
                            <a href="#" class="link-cta" role="button">Customer Login</a>
                        </div>

                        <div class="more-links-container">
                            <br><br>
                            <p><a href="#" class="text-black">Forgot your password?</a></p>
                            <p><a href="#" class="text-black">Don't have an online account? Register.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
