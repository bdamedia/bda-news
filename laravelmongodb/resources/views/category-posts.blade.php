@include('header')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>{{ $cat_name }}</li>
                </ol>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</div><!-- Page title end -->

<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="block category-listing">
                    <h3 class="block-title"><span>{{ $cat_name }}</span></h3>

                    <!--ul class="subCategory unstyled">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Food</a></li>
                    </ul-->

                    <div class="row">

                        @foreach ($category_posts as $post)

                            <div class="col-md-6 col-sm-6">
                                <div class="post-block-style post-grid clearfix">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                        </a>
                                    </div>
                                    <a class="post-cat" href="# ">{{ $cat_name }}</a>
                                    <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="{{ $cat_slug }}/{{ $post->slug }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">John Doe</a></span>
                                            <span class="post-date">Feb 24, 2017</span>
                                            <span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span>
                                        </div>
                                        <p>{{ $post->desc }}...</p>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Col 1 end -->
                        @endforeach


                    </div><!-- Row end -->
                </div><!-- Block Lifestyle end -->

                <div class="paging">
                    {{ $category_posts }}
                    <!--ul class="pagination">

                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                        <li>
                            <span class="page-numbers">Page 1 of 2</span>
                        </li>
                    </ul-->
                </div><!-- Paging end -->


            </div><!-- Content Col end -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="widget">
                        <h3 class="block-title"><span>Follow Us</span></h3>

                        <ul class="social-icon">
                            <li><a href="https://fontawesome.com/" target="_blank"><i class="fa fa-rss"></i></a></li>
                            <li><a href="https://www.facebook.com/5Vietnam247" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://aboutme.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!-- Widget Social end -->

                    <div class="widget color-default">
                        <h3 class="block-title"><span>Popular News</span></h3>

                        <div class="post-overaly-style clearfix">
                            <div class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" src="images/news/lifestyle/health4.jpg" alt="" />
                                </a>
                            </div>

                            <div class="post-content">
                                <a class="post-cat" href="#">Health</a>
                                <h2 class="post-title title-small">
                                    <a href="#">Smart packs parking sensor tech and beeps when col…</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">Feb 06, 2017</span>
                                </div>
                            </div><!-- Post content end -->
                        </div><!-- Post Overaly Article end -->


                        <div class="list-post-block">
                            <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ URL::asset('images/news/tech/gadget3.jpg') }}" alt="" />
                                            </a>
                                            <a class="post-cat" href="#">Gadgets</a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Mar 13, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 1 end -->

                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/travel5.jpg') }}" alt="" />
                                            </a>
                                            <a class="post-cat" href="#">Travel</a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Hynopedia helps female travelers find health care...</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Jan 11, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 2 end -->

                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ URL::asset('images/news/tech/robot5.jpg') }}" alt="" />
                                            </a>
                                            <a class="post-cat" href="#">Robotics</a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Robots in hospitals can be quite handy to navigate around...</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Feb 19, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 3 end -->

                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/food1.jpg') }}" alt="" />
                                            </a>
                                            <a class="post-cat" href="#">Food</a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Feb 27, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 4 end -->

                            </ul><!-- List post end -->
                        </div><!-- List post block end -->

                    </div><!-- Popular news widget end -->

                    <div class="widget text-center">
                        <img class="banner img-responsive" src="{{ URL::asset('images/banner-ads/ad-sidebar.png') }}" alt="" />
                    </div><!-- Sidebar Ad end -->

                    <div class="widget m-bottom-0">
                        <h3 class="block-title"><span>Newsletter</span></h3>
                        <div class="ts-newsletter">
                            <div class="newsletter-introtext">
                                <h4>Get Updates</h4>
                                <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                            </div>

                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                        <button class="btn btn-primary">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Newsletter end -->
                    </div><!-- Newsletter widget end -->

                </div><!-- Sidebar right end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->
@include('footer')
