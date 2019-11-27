<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $brand }}</title>

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
                        <li><a href="#">About</a></li>
                        <li><a href="#">Write for Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!--/ Top bar left end -->

                <div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="#">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="#">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Google+" href="#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Rss" href="#">
                                <span class="social-icon"><i class="fa fa-rss"></i></span>
                            </a>
                            <a title="Skype" href="#">
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
                            <img src="images/logos/logo.png" alt="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <a href="#"><img src="images/banner-ads/ad-top-header.png" class="img-responsive" alt=""></a>
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
                                <!--li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active"><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                    </ul>
                                </li-->
                                <li>
                                    <a href="category-style2.html">Thời sự</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Pháp luật</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Thế giới</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Xuất bản</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Kinh doanh</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Công nghệ</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Thể thao</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Giải trí</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Thời trang</a>
                                </li>
                                <li>
                                    <a href="category-style2.html">Đời sống</a>
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="category-style1.html" class="dropdown-toggle more" >
                                        <span class="dot dot1"></span>
                                        <span class="dot dot2"></span>
                                        <span class="dot dot3"></span>
                                        <!--i class="fa fa-angle-down"></i-->
                                    </a>
                                    <div class="dropdown-menu mega-menu-content hidden-xs hidden-sm clearfix">

                                        <!--div class="menu-tab"-->
                                        <ul class="nav nav-tabs nav-stacked col-md-12" data-toggle="tab-hover">
                                            <li class="active">
                                                <a class="animated fadeIn" href="#tab-A" data-toggle="tab">
											  			<span class="tab-head">
															<span class="tab-text-title">Thời sự</span>
														</span>
                                                </a>

                                                <div class="subcate">
                                                    <ul>
                                                        <li>
                                                            <a href="category-style2.html">Chính trị</a>
                                                        </li>
                                                        <li>
                                                            <a href="category-style2.html">Giao thông</a>
                                                        </li>
                                                        <li>
                                                            <a href="category-style2.html">Đô thị</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-B" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Pháp luật</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>
                                                        <li>
                                                            <a href="category-style2.html">Pháp đình</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Vụ án</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Thế giới</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Quân sự</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Tư liệu</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Phân tích</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Người Việt 4 phương</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Chuyện lạ</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Xuất bản</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Tin tức xuất bản</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sách hay</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Tác giả</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Kinh doanh</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Bất động sản</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Hàng không</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Tài chính</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Tiêu dùng</a>
                                                        </li>


                                                        <li>
                                                            <a href="/doanh-nhan.html">Doanh nhân</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html" style="color:#E4BC6F">Đầu tư du lịch</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Công nghệ</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Mobile</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Internet</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">eSports</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">#Reno2Series</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Thể thao</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Bóng đá Việt Nam</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Bóng đá Anh</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Võ thuật</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Hậu trường</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">SEA Games 30</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Xe</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Ôtô</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Xe máy</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Đánh giá</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Xe thể thao</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-C" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Giải trí</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Sao Việt</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sao Châu Á</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sao Hollywood</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Âm nhạc</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Nhạc Việt</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Nhạc Hàn</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Nhạc Âu Mỹ</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">#ZingChart</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Thời trang</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Phim chiếu rạp</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Phim truyền hình</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Game Show</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Đời sống</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Xu hướng</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Giới trẻ</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sống đẹp</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sự kiện</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Giáo dục</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Thời trang sao</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Mặc đẹp</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Làm đẹp</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Trang sức</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">#AVIFW2019</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Sức khỏe</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Xu hướng</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Giới trẻ</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sống đẹp</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Sự kiện</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Du lịch</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Tuyển sinh 2019</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Tư vấn</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html"> Du học</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Học Tiếng Anh</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Ẩm thực</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">Địa điểm ăn uống</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Món ngon</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="animated fadeIn" href="#tab-D" data-toggle="tab">
												  		<span class="tab-head">
															<span class="tab-text-title">Nhịp sống</span>
														</span>
                                                </a>
                                                <div class="subcate">
                                                    <ul>






                                                        <li>
                                                            <a href="category-style2.html">TTDN</a>
                                                        </li>


                                                        <li>
                                                            <a href="category-style2.html">Cười</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>


                                        <!--/div--><!-- Menu tab end -->
                                    </div><!-- Mega menu end -->
                                </li><!-- Tab menu end -->



                                <!--li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown-menu mega-menu-content hidden-xs hidden-sm clearfix">
                                        <div class="mega-menu-content-inner">
                                            <div class="row">
                                              <div class="col-md-3">
                                                  <div class="post-block-style clearfix">
                                                        <div class="post-thumb">
                                                            <img class="img-responsive" src="images/news/video/video4.jpg" alt="" />
                                                            <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                                          <div class="video-icon">
                                                              <i class="fa fa-play"></i>
                                                           </div>
                                                        </a>
                                                       </div>
                                                        <div class="post-content">
                                                             <h2 class="post-title title-small">
                                                                 <a href="#">Netcix cuts out the chill with an integrated...</a>
                                                             </h2>
                                                         </div>
                                                    </div>
                                              </div>

                                              <div class="col-md-3">
                                                  <div class="post-block-style clearfix">
                                                        <div class="post-thumb">
                                                           <img class="img-responsive" src="images/news/video/video3.jpg" alt="" />
                                                            <a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
                                                              <div class="video-icon">
                                                                  <i class="fa fa-play"></i>
                                                               </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                             <h2 class="post-title title-small">
                                                                 <a href="#">Netcix cuts out the chill with an integrated...</a>
                                                             </h2>
                                                         </div>
                                                    </div>
                                              </div>

                                              <div class="col-md-3">
                                                  <div class="post-block-style clearfix">
                                                        <div class="post-thumb">
                                                           <img class="img-responsive" src="images/news/video/video2.jpg" alt="" />
                                                            <a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
                                                              <div class="video-icon">
                                                                  <i class="fa fa-play"></i>
                                                               </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                             <h2 class="post-title title-small">
                                                                 <a href="#">TG G6 will have dual 13-megapixel cameras...</a>
                                                             </h2>
                                                         </div>
                                                    </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="post-block-style clearfix">
                                                        <div class="post-thumb">
                                                           <img class="img-responsive" src="images/news/video/video1.jpg" alt="" />
                                                            <a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
                                                              <div class="video-icon">
                                                                  <i class="fa fa-play"></i>
                                                               </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                             <h2 class="post-title title-small">
                                                                 <a href="#">Netcix cuts out the chill with an integrated...</a>
                                                             </h2>
                                                         </div>
                                                    </div>
                                              </div>
                                          </div>
                                        </div>

                                    </div>
                                </li-->
                                <!--li>
                                    <a href="category-style4.html">Travel</a>
                                </li-->

                                <!--li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown-submenu">
                                            <a href="#.">Category Layouts</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="category-style1.html">Category Style 1</a></li>
                                                <li><a href="category-style2.html">Category Style 2</a></li>
                                                <li><a href="category-style3.html">Category Style 3</a></li>
                                                <li><a href="category-style4.html">Category Style 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#.">Post Formates</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="single-post1.html">Single Post 1</a></li>
                                                <li><a href="single-post2.html">Single Post 2</a></li>
                                                <li><a href="single-post3.html">Single Post 3</a></li>
                                                <li><a href="single-post4.html">Single Post 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#.">Sidebar</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="single-post1.html">Right Sidebar</a></li>
                                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#.">Shortcodes</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="blockquote.html">Blockquotes</a></li>
                                                <li><a href="tabs.html">Tabs</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#.">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="author.html">Author</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li-->


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
