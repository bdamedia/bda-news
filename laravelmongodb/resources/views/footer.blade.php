<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 footer-widget">
                    <h3 class="widget-title">Trending Now</h3>
                    <div class="list-post-block">
                        <ul class="list-post">
                            @foreach ($data['random_posts'] as $post)
                            <li class="clearfix">
                                <div class="post-block-style post-float clearfix">
                                    <div class="post-thumb">
                                        <a href="{{ $post->thumb_url }}">
                                            <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                        </a>
                                    </div><!-- Post thumb end -->

                                    <div class="post-content">
                                        <h2 class="post-title title-small">
                                            <a href="/{{ $data['cat_slug'] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y') }}</span>
                                        </div>
                                    </div><!-- Post content end -->
                                </div><!-- Post block style end -->
                            </li><!-- Li 1 end -->
                            @endforeach

                        </ul><!-- List post end -->
                    </div><!-- List post block end -->

                </div><!-- Col end -->

                <div class="col-md-3 col-sm-12 footer-widget widget-categories">
                    <h3 class="widget-title">Hot Categories</h3>
                    <ul>
                        <li>
                            <a href="#"><span class="catTitle">Robotics</span><span class="catCounter"> (5)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Games</span><span class="catCounter"> (6)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Gadgets</span><span class="catCounter"> (5)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Travel</span><span class="catCounter"> (5)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Health</span><span class="catCounter"> (5)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Architecture</span><span class="catCounter"> (5)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">Food</span><span class="catCounter"> (5)</span></a>
                        </li>
                    </ul>

                </div><!-- Col end -->

                <div class="col-md-3 col-sm-12 footer-widget twitter-widget">
                    <h3 class="widget-title">Latest Tweets</h3>
                    <ul>
                        <li>
                            <div class="tweet-text">
                                <span>About 13 days ago</span>
                                Please, Wait for the next version of our templates to update #Joomla 3.7
                                <a href="#">https://t.co/LlEv8HgokN</a>
                            </div>
                        </li>
                        <li>
                            <div class="tweet-text">
                                <span>About 15 days ago</span>
                                #WordPress 4.8 is here!
                                <a href="#">https://t.co/uDjRH4Gya9</a>
                            </div>
                        </li>
                        <li>
                            <div class="tweet-text">
                                <span>About 1 month ago</span>
                                Please, Wait for the next version of our templates to update #Joomla 3.7
                                <a href="#">https://t.co/LlEv8HgokN</a>
                            </div>
                        </li>
                    </ul>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-12 footer-widget">
                    <h3 class="widget-title">Post Gallery</h3>
                    <div class="gallery-widget">
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/health1.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/food3.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/travel4.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/architecture1.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/tech/gadget1.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/tech/gadget2.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/tech/game2.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/tech/robot5.jpg') }}" alt="" /></a>
                        <a href="#"><img class="img-responsive" src="{{ URL::asset('images/news/lifestyle/travel5.jpg') }}" alt="" /></a>
                    </div>
                </div><!-- Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="footer-info text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-info-content">
                        <div class="footer-logo">
                            <img class="img-responsive" src="{{ URL::asset('images/logos/logo.svg') }}" alt="" />
                        </div>
                        <p>Báo điện tử 5Vietnam - Một chuyên trang của BDA Media Network.
Tòa soạn : Tầng 6 Caribe Plaza Building, 53 Palmeras Street San Juan, Puerto Rico.</p>
                        <p class="footer-info-phone"><i class="fa fa-phone"></i>Email : news@5vietnam.com</p>
                        <p class="footer-info-email"><i class="fa fa-envelope-o"></i>Liên hệ quảng cáo : ads@5vietnam.com</p>

                        <!-- <p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
                        <p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p> -->
                        <ul class="unstyled footer-social">
                            <li>
                                <!-- <a title="Rss" href="https://fontawesome.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-rss"></i></span>
                                </a> -->
                                <a title="Facebook" href="https://www.facebook.com/5Vietnam247" target="_blank">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <!-- <a title="Twitter" href="https://twitter.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a title="Google+" href="https://aboutme.google.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                                </a>
                                <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                </a>
                                <a title="Skype" href="https://skype.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-skype"></i></span>
                                </a>
                                <a title="Dribbble" href="https://dribbble.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-dribbble"></i></span>
                                </a>
                                <a title="Pinterest" href="https://pinterest.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-pinterest"></i></span>
                                </a>
                                <a title="Instagram" href="https://instagram.com/" target="_blank">
                                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                </a> -->
                            </li>
                        </ul>
                    </div><!-- Footer info content end -->
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer info end -->

</footer><!-- Footer end -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="copyright-info">
                    <span>Copyright © 2017 5Vietnam All Rights Reserved</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="footer-menu">
                    <ul class="nav unstyled">
                        <!-- <li><a href="#">Site Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertisement</a></li>
                        <li><a href="#">Cookies Policy</a></li>
                        <li><a href="#">Contact Us</a></li> 
                        <li><a href="/top/page/advertise">LH Quảng cáo</a></li>
                        `-->
                        <li><a href="/top/page/aboutus">About us</a></li>
                        <li><a href="/top/page/writeus">Policy</a></li>
                        <li><a href="/top/page/advertise">Advertisement</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>

    </div><!-- Container end -->
</div><!-- Copyright end -->


<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ URL::asset('js/waypoints.min.js') }}"></script>
<!-- Color box -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.colorbox.js') }}"></script>
<!-- Smoothscroll -->
<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js') }}"></script>


<!-- Template custom -->
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

</div><!-- Body inner end -->
</body>
</html>
