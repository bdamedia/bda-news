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


    <![endif]-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>
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
        .logo-mobile{
            /*margin-left: 55px;*/
            margin-left: -51px!important;
            /*width: 50%;*/
        }
        .logo-mobile img{
            width: 46%;
            margin-top: 4px;

        }
        .site-navigation{
            float: left;
        }
        .menu1 {cursor: pointer; background:#ec0000; color:#fff; height:40px; line-height:40px;letter-spacing:1px; width:100%;}
        .menu {cursor: pointer; background: #ffffff; width:100%;}
        .menu a,.menu1 a{ color:#fff; padding: 10px; cursor: pointer;}
        h3.block-title-mobile{
            margin-bottom: 12px;
            color: #0097D2;
            margin-top: 12px;
        }

        h3.block-title-mobile span{
            text-transform: uppercase;
            font-size: 18px;
        }
        section, .section-padding {
            padding: 2px 0;
            position: relative;
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
            googletag.defineSlot('/21689237362/thoisu247-footer', [970, 250], 'div-gpt-ad-1575891936435-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-header', [970, 250], 'div-gpt-ad-1575891986270-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-postpage-endpost-desktop', [970, 250], 'div-gpt-ad-1575892015830-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-postpage-endpost-mobile', [320, 480], 'div-gpt-ad-1575892048752-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-postpage-innerpost-mobile', [300, 300], 'div-gpt-ad-1575892083273-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-sidebar', [300, 600], 'div-gpt-ad-1575892118048-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu-sidebar2-desktop', [300, 600], 'div-gpt-ad-1575892145031-0').addService(googletag.pubads());
            googletag.defineSlot('/21689237362/thoisu247-sidebar3-desktop', [300, 600], 'div-gpt-ad-1575892179919-0').addService(googletag.pubads());

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


    {{--<div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="ts-date">
                        <i class="fa fa-calendar-check-o"></i>{{date("F j, Y ")}}
                    </div>
                    <ul class="unstyled top-nav">
                        <li><a href="#">Trực tiếp bóng đá</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>--}}


    <div class="main-nav menu clearfix">
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

                        <a class="logo-mobile" href="/">
                            <img src="{{ URL::asset('images/logos/logo.png') }}" alt="">
                        </a>

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
                

                <!-- <div class="topnav">
                    <div class="search-container searchform-wrap">
                        <input type="text" value="" name="searchnameinput" id="searchnameinput" placeholder="Nhập nội dung cần tìm..." />
                        <button style="display: none;" onclick="myFunction()" id="searchname"><i class="fa fa-search"></i></button>
                    </div>
                </div> -->


                <!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->
