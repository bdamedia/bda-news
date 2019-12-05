<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div-- class="sidebar sidebar-right">
		<!--div class="widget">
			<h3 class="block-title"><span>Follow Us</span></h3>

			<ul class="social-icon">
				<li><a href="https://fontawesome.com/" target="_blank"><i class="fa fa-rss"></i></a></li>
				<li><a href="https://www.facebook.com/5Vietnam247" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://aboutme.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div --><!-- Widget Social end -->

		<div class="widget color-default">
			<h3 class="block-title"><span>Popular News</span></h3>

            @foreach ($data['popular_posts'] as $post)
			<div class="post-overaly-style clearfix">
				<div class="post-thumb">
					<a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
						<img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
					</a>
				</div>

				<div class="post-content">
		 			<a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
		 			<h2 class="post-title title-small">
                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
		 			</h2>
		 			<div class="post-meta">
		 				<span class="post-date">{{ $post->date->toDateTime()->format('M d, Y') }}</span>
		 			</div>
	 			</div><!-- Post content end -->
			</div><!-- Post Overaly Article end -->
            @endforeach

			<div class="list-post-block">
				<ul class="list-post">

                    @foreach ($data['random_posts'] as $post)
                        <li class="clearfix">
                            <div class="post-block-style post-float clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                        <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                    <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                </div><!-- Post thumb end -->

                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post block style end -->
                        </li><!-- Li 1 end -->
                    @endforeach
				</ul><!-- List post end -->
			</div><!-- List post block end -->

		</div><!-- Popular news widget end -->

		<div class="widget text-center">

            <!-- /21689237362/thoisu247-header -->
            <div id='div-gpt-ad-2'>
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-2'); });
                </script>
            </div>
			<!--img class="banner img-responsive" src="{{--{{ URL::asset('images/banner-ads/ad-sidebar.png')}}--}}" alt="" /-->
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
