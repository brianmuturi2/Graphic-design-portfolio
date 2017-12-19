<!DOCTYPE html> 
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Professional graphic designers" />
        <meta name="keywords" content="graphic design Kenya, flyer design, logo design, magazine design, brochure design, poster design" />
        <meta name="robots" content="index, follow" />
        <meta name="">
        <title>BMN Graphics | Kenya</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-responsive.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pluton.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.cslider.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/ico/apple-touch-icon-144.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/ico/apple-touch-icon-114.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/ico/apple-touch-icon-57.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.ico') }}">
    </head>

    <body>

        @include('partials.header')
        @include('partials.home')
        @include('partials.services')
        @include('partials.portfolio')
        @include('partials.about')
        @include('partials.clients')
        @include('partials.price')
        @include('partials.contact')
        @include('partials.footer')

        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.cslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.inview.js') }}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>