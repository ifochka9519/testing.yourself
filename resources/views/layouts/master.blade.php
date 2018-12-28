<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico') }}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('dashboard')}}">Testing Yourself</a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('dashboard')}}"><span>Home <span class="border"></span></span></a></li>
                    <li><a href="{{route('create')}}"><span>Create <span class="border"></span></span></a></li>
                    <li><a href="{{route('all')}}"><span>My Tests <span class="border"></span></span></a></li>
                    <li><a href="{{route('log_out')}}"><span>Log out <span class="border"></span></span></a></li>
                    <li><a href="{{route('elements')}}"><span>Elements <span class="border"></span></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


@yield('content')


<footer id="fh5co-footer">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="fh5co-footer-widget">
                    <h2 class="fh5co-footer-logo">Testing Yourself</h2>
                    <p>Наш сервіс звільнить надає можливість створювати свої власні тести для перевірки знань. Завдяки зручності даного інтерфейсу, ви тратите мінімум часу, для досягнення максимального результату.</p>
                </div>
                <div class="fh5co-footer-widget">
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="visible-sm-block clearfix"></div>


        </div>

        <div class="row fh5co-row-padded fh5co-copyright">
            <div class="col-md-5">
                <p><small>&copy; SMART.Digital Age. All Rights Reserved. <br>Designed by: <a href="http://smartda.inf.ua/" target="_blank">SMART.DA</a></small></p>
            </div>
        </div>
    </div>

</footer>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>


</body>
</html>
