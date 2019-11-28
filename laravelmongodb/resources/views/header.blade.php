<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $brand ?? '' }}</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ URL::asset('css/colorbox.css') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]-->
    <style>
        .dot {
            width: 4px;
            height: 4px;
            background-color: #444444;
            -webkit-border-radius: 50%;
            -khtml-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -webkit-transition: all 0.3s ease 0s;
            -khtml-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -2px;
            margin-top: -2px;
        }

        .more .dot:before {
            content: "";
            left: -8px;
            width: 4px;
            height: 4px;
            background: #444444;
            -webkit-border-radius: 50%;
            -khtml-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -webkit-transition: all 0.3s ease 0s;
            -khtml-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: absolute;
            top: 50%;
            margin-top: -2px;
        }
        .more .dot:after {
            left: 8px;
            content: "";
            width: 4px;
            height: 4px;
            background: #444444;
            -webkit-border-radius: 50%;
            -khtml-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -webkit-transition: all 0.3s ease 0s;
            -khtml-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: absolute;
            top: 50%;
            margin-top: -2px;
        }

        .more{
            vertical-align: middle;
            padding: 24px!important;
        }

        .nav-stacked{
            margin-left: 40px;
        }
        .nav-stacked li{
            width: 178px;
            margin-right: 0;
            margin-bottom: 20px;
            line-height: 26px;
            float: none;
            position: relative;
            list-style: none;
            list-style-position: unset;

            display: inline-block;
        }
        .subcate{
            min-height: 272px;
        }
        .subcate ul{
            padding: 0px;
        }
        .subcate ul li{
            margin-bottom: 0px;
            padding: 0px;
            float: left;
        }
        .tab-text-title{
            font-weight: bolder;
        }
        .nav a{
            text-transform: capitalize!important;
        }
    </style>
</head>

<body>

<div class="body-inner">

    <div class="trending-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="trending-title">Trending Now</h3>
                    <div id="trending-slide" class="owl-carousel owl-theme trending-slide">
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Item 1 end -->
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Item 2 end -->
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Item 3 end -->
                    </div><!-- Carousel end -->
                </div><!-- Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </div><!--/ Trending end -->

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="ts-date">
                        <i class="fa fa-calendar-check-o"></i>May 29, 2017
                    </div>
                    <ul class="unstyled top-nav">
                        <li><a href="/top/page/aboutus">About</a></li>
                        <li><a href="/top/page/writeus">Write for Us</a></li>
                        <li><a href="/top/page/advertise">Advertise</a></li>
                        <li><a href="/top/page/contact">Contact</a></li>
                    </ul>
                </div><!--/ Top bar left end -->

                <div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="https://facebook.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="https://twitter.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Google+" href="https://aboutme.google.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Rss" href="https://fontawesome.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-rss"></i></span>
                            </a>
                            <a title="Skype" href="https://skype.com/" target="_blank">
                                <span class="social-icon"><i class="fa fa-skype"></i></span>
                            </a>
                        </li>
                    </ul><!-- Ul end -->
                </div><!--/ Top social col end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ URL::asset('images/logos/logo.svg') }}" alt="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <a href="#"><img src="{{ URL::asset('images/banner-ads/ad-top-header.png') }}" class="img-responsive" alt=""></a>
                    </div>
                </div><!-- header right end -->
            </div><!-- Row end -->
        </div><!-- Logo and banner area end -->
    </header><!--/ Header end -->

    <div class="main-nav clearfix">
        <div class="container">
            <div class="row">
                <nav class="site-navigation navigation">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                @foreach ($menus as $menu)
                                    <li>
                                        <a href="/{{ $menu->slug }}">{{ $menu->name }}</a>
                                    </li>
                                @endforeach
                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->

    <div class="gap-40"></div>
