@include('header')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>{{ $cat_name }}</a></li>
                </ol>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</div><!-- Page title end -->

<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="single-post">

                    <div class="post-title-area">
                        <a class="post-cat" href="#">Health</a>
                        <h2 class="post-title">
                            {{ $post['title'] }}
                        </h2>
                        <div class="post-meta">
								<span class="post-author">
									By <a href="#">John Doe</a>
								</span>
                            <span class="post-date"><i class="fa fa-clock-o"></i>{{ print_r(date('d/m/Y', strtotime($post['date']['$date']['$numberLong']))) ?? '' }} March 14, 2017</span>
                            <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
                            <span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span>
                        </div>
                    </div><!-- Post title end -->

                    <div class="post-content-area">
                        <div class="post-media post-featured-image">
                            <a href="{{ $post['images'][0] }}" class="gallery-popup"><img src="{{ $post['images'][0] ?? '' }}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="entry-content">
                            @foreach ($post['content'] as $content)
                               <p> {{ $content }} </p>
                            @endforeach
                        </div><!-- Entery content end -->

                        <div class="tags-area clearfix">
                            <div class="post-tags">
                                <span>Tags:</span>
                                @foreach ($post['tags'] as $tags)
                                    <a href="#"># {{ $tags }} </a>
                                @endforeach

                            </div>
                        </div><!-- Tags end -->

                        <div class="share-items clearfix">
                            <ul class="post-social-icons unstyled">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
                                </li>
                                <li class="gplus">
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
                                </li>
                                <li class="pinterest">
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
                                </li>
                            </ul>
                        </div><!-- Share items end -->

                    </div><!-- post-content end -->
                </div><!-- Single post end -->

                <nav class="post-navigation clearfix">
                    <div class="post-previous">
                        <a href="#">
                            <span><i class="fa fa-angle-left"></i>Previous Post</span>
                            <h3>
                                Deleting fears from the brain means you might never need to face them
                            </h3>
                        </a>
                    </div>
                    <div class="post-next">
                        <a href="#">
                            <span>Next Post <i class="fa fa-angle-right"></i></span>
                            <h3>
                                Smart packs parking sensor tech and beeps when collisions
                            </h3>
                        </a>
                    </div>
                </nav><!-- Post navigation end -->

                <div class="author-box">
                    <div class="author-img pull-left">
                        <img src="images/news/author.png" alt="">
                    </div>
                    <div class="author-info">
                        <h3>Razon Khan</h3>
                        <p class="author-url"><a href="#">http://www.newsdaily247.com</a></p>
                        <p>Selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate. Listicle meditation paleo, drinking vinegar sint direct trade.</p>
                        <div class="authors-social">
                            <span>Follow Me: </span>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div> <!-- Author box end -->

                <div class="related-posts block">
                    <h3 class="block-title"><span>Related Posts</span></h3>

                    <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/travel5.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Health</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">John Doe</a></span>
                                        <span class="post-date">Feb 19, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div><!-- Item 1 end -->

                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/health5.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Health</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">Netcix cuts out the chill with an integrated...</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">John Doe</a></span>
                                        <span class="post-date">Feb 19, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div><!-- Item 2 end -->

                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/travel3.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Travel</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">This Aeroplane that looks like a butt is the largest aircraft in the world</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">John Doe</a></span>
                                        <span class="post-date">Feb 19, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div><!-- Item 3 end -->

                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/travel4.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Travel</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">19 incredible photos from Disney's 'Star Wars' cruise algore</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">John Doe</a></span>
                                        <span class="post-date">Feb 19, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div><!-- Item 4 end -->
                    </div><!-- Carousel end -->

                </div><!-- Related posts end -->

                <!-- Post comment start -->
                <!--div id="comments" class="comments-area block">
                    <h3 class="block-title"><span>03 Comments</span></h3>

                    <ul class="comments-list">
                        <li>
                            <div class="comment">
                                <img class="comment-avatar pull-left" alt="" src="images/news/user1.png">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Michelle Aimber</span>
                                        <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights.</p></div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <ul class="comments-reply">
                                <li>
                                    <div class="comment">
                                        <img class="comment-avatar pull-left" alt="" src="images/news/user2.png">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Genelia Dusteen</span>
                                                <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                            </div>
                                            <div class="comment-content">
                                                <p>Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo.</p></div>
                                            <div class="text-left">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment last">
                                <img class="comment-avatar pull-left" alt="" src="images/news/user1.png">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Michelle Aimber</span>
                                        <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>VHS Wes Anderson Banksy food truck vero. Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo.</p></div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div-->

                <!--div class="comments-form">
                    <h3 class="title-normal">Leave a comment</h3>

                    <form role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your Website" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>
                        </div>
                    </form>
                </div-->

            </div><!-- Content Col end -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="widget">
                        <h3 class="block-title"><span>Follow Us</span></h3>

                        <ul class="social-icon">
                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
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
                                                <img class="img-responsive" src="images/news/tech/gadget3.jpg" alt="" />
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
                                                <img class="img-responsive" src="images/news/lifestyle/travel5.jpg" alt="" />
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
                                                <img class="img-responsive" src="images/news/tech/robot5.jpg" alt="" />
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
                                                <img class="img-responsive" src="images/news/lifestyle/food1.jpg" alt="" />
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
                        <img class="banner img-responsive" src="images/banner-ads/ad-sidebar.png" alt="" />
                    </div><!-- Sidebar Ad end -->

                    <div class="widget widget-tags">
                        <h3 class="block-title"><span>Tags</span></h3>
                        <ul class="unstyled clearfix">
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Architechture</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Lifestyles</a></li>
                            <li><a href="#">Robotics</a></li>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div><!-- Tags end -->

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
