<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $data['brand'] ?? '' }} | {{ $page_name ?? '' }}</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
    <meta name="description" content="{{ $meta_desc ?? '' }}">
    <meta property="og:url"           content="{{ Request::fullUrl() }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $data['brand'] ?? '' }} | {{ $page_name ?? '' }}" />
    <meta property="og:description"   content="{{ $meta_desc ?? '' }}" />
    <meta property="og:image"         content="{{ $og_image ?? URL::asset('images/logos/logo.png') }}" />

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

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

  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>
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

        #latest-news-slide .item {
            width: 220px;
            display: inline-block;
            margin-right: 15px;
        }

        .image-size{
            height: 242px;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KKLF49R');</script>
    <!-- End Google Tag Manager -->

    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
            googletag.defineSlot('/21689237362/thoisu247-footer', [728, 90], 'div-gpt-ad-1575528682755-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-header', [728, 90], 'div-gpt-ad-1575528738501-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-sidebar', [300, 300], 'div-gpt-ad-1575528797111-0').addService(googletag.pubads());

            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKLF49R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                        <i class="fa fa-calendar-check-o"></i>{{date("F j, Y ")}}
                    </div>
                    <ul class="unstyled top-nav">
                        <!-- <li><a href="/top/page/aboutus">About us</a></li>
                        <li><a href="/top/page/writeus">Policy</a></li>
                        <li><a href="/top/page/advertise">LH Quảng cáo</a></li> -->
                        <!--  <li><a href="/top/page/contact">Trực tiếp bóng đá</a></li> -->
                        <li><a href="#">Trực tiếp bóng đá</a></li>
                    </ul>
                </div><!--/ Top bar left end -->

                <div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <!-- <a href="https://facebook.com/5Vietnam247?url=https://facebook.com/5Vietnam247&pubid=USERNAME&ct=1&title=test&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/></a> -->
                            <a title="Facebook" href="https://facebook.com/5Vietnam247" target="_blank">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/admin/blog" target="_blank">
                              Share Any User
                            </a> -->
                            <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLink.com&display=popup"> share this </a> -->
                            <!--a name='fb_share' type='button_count' href='http://www.facebook.com/5Vietnam247?appId=1015971792082623&link=http://news.bda-media.com/admin/blog' rel='nofollow' target="_blank">Share</a-->
                            <!-- <a name='fb_share' type='button_count' href='http://www.facebook.com/sharer.php?appId=1015971792082623&link=http://127.0.0.1:8000/admin/blog' rel='nofollow' target="_blank">Share static</a>
                             -->
                            <!--a href="#"
                              onclick="
                              window.open(
                                'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
                                'facebook-share-dialog',
                                'width=626,height=436'
                                );
                                return false;"
                              >
                              Share on Facebook
                            </a-->

                            <!-- <a title="Twitter" href="https://twitter.com/" target="_blank">
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
                            </a> -->
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
                        <a href="/">
                            <img src="{{ URL::asset('images/logos/logo.png') }}" alt="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <!-- /21689237362/thoisu247-header -->
                        <div style="width: 728px; height: 90px;" id='div-gpt-ad-1575528738501-0'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575528738501-0'); });
                            </script>
                        </div>
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
                                @foreach ($data['menus'] as $menu)
                                    <li>
                                        <a href="/{{ $menu->slug }}">{{ $menu->name }}</a>
                                    </li>
                                @endforeach
                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->


                <!-- <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div> -->

                <!-- Search end -->


                <div class="topnav">
                    <div class="search-container searchform-wrap">
                        <input type="text" id="searchnameinput" placeholder="Nhập nội dung cần tìm...">
                        <button onclick="myFunction()" id="searchname"><i class="fa fa-search"></i></button>
                    </div>
                </div>

                <!-- <div class="search-block" style="display: none;">
                     <div class="searchform-wrap">
                        <input type="text" id="searchnameinput" placeholder="Search">
                        <button id="searchname"><span class="fa fa-search"></span></button>
                    </div>
                </div> -->

                <!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->
    @if($data['isMobile'])

    @else
        <div class="gap-40"></div>
        <div style="text-align: center;" class="row">
            <div class="col-md-12">
                <img style=" width: 60%; height: 200px;" src="https://hackernoon.com/hn-images/1*j41hMsYft-ifSvXuWOb7Gg.png" />
            </div>
        </div>
    @endif
