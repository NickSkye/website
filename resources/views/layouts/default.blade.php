<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="robots" content="all"/>
        <meta name="robots" content="index, follow"/>
        <meta name="revisit-after" content="4 days"/>
        <link rel="icon" href="/images/cp-icon favicon.png">

        <title>Parking Management | Parking Services | Valet</title>

        <meta name="author" content="WollnerStudios, Inc - W Brand Studio">
        <meta name="keywords" content="Parking management, valet, space management, parking revenue control">
        <meta name="distribution" CONTENT="Global">

        <meta name="location" content="Los Angeles, California">
        <meta name="location" content="LA, CA">
        <meta name="abstract" content="parking management company, parking attendant, parking revenue control">
        <meta name="geo.region" content="US-CA">
        <meta name="geo.placename" content="Los Angeles">
        <meta name="geo.position" content="34.1017327;-118.3324403">
        <meta name="ICBM" content="34.1017327, -118.3324403">
        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:url" content="">
        <meta property="og:type" content="website">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="fb:app_id" content="">
        <meta property="article:author" content="">
        <meta property="article:publisher" content="">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@carparkinc">
        <meta name="twitter:creator" content="@carparkinc">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:url" content="">
        <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />
        <script src="bower_components/aos/dist/aos.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        @if(app()->isLocal())
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        @endif

        <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
        </script>
    </head>
    <body>
        @include('partials.sidenav')

        <div id="wrapper">
            @yield('content')
            @if(Request::is('home'))
                <div class="hidden-xs">
                    @include('partials.footer')
                </div>
            @endif
            @if(!Request::is('home'))

                    @include('partials.footer')

            @endif

        </div>

        @if(app()->isLocal())
            <script src="{{ asset('/js/app.js') }}"></script>
        @else
            <script src="{{ mix('/js/app.js') }}"></script>
        @endif
    </body>
</html>
