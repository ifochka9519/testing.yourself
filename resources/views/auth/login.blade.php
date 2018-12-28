
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booster &mdash; A free HTML5 Template by FREEHTML5.CO</title>
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
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
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
                <a class="navbar-brand" href="{{route('home')}}">Testing Yourself</a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('home')}}"><span>Home <span class="border"></span></span></a></li>
                    <li><a href="{{route('register')}}"><span>Sing Up <span class="border"></span></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END .header -->

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fh5co-page-heading-lead">
                    Login
                    <span class="fh5co-border"></span>
                </h1>

            </div>
        </div>
    </div>
</aside>

@if(count($errors)>0)
    <div class="row">
        <div class="col-md-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div id="fh5co-main">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4">


                <div class="row">
                    <form action="{{route('login')}}" method="post">
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')?'has-error':''}}">
                                <label for="email" class="sr-only">Email</label>
                                <input value="{{\Illuminate\Support\Facades\Request::old('email')}}"  placeholder="Email" name="email" id="email" type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('password')?'has-error':''}}">
                                <label for="password" class="sr-only">Password</label>
                                <input value="{{\Illuminate\Support\Facades\Request::old('password')}}"  placeholder="Password" name="password" id="password" type="password" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control" value="Send">

                            </div>
                        </div>
                        {{csrf_field()}}
                        <input type="hidden" name="_tocken" value="{{\Illuminate\Support\Facades\Session::token()}}">
                    </form>
                </div>
            </div>



            <div class="col-md-4 col-md-pull-8">



                <div class="fh5co-sidebox">
                    <h3 class="fh5co-sidebox-lead">Для чого потрібна реєстрація?</h3>
                    <p>Зареєструвавшись одного разу, ви завжди матимете доступ до своїх тестів, щоб підтримувати свої знання і вдосконалювати свою пам'ять.</p>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

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
