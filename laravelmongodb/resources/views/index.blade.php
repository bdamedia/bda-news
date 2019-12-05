
@include('header')
<div class="gap-40"></div>
<section class="featured-post-area no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 pad-r">
                <div id="featured-slider" class="owl-carousel owl-theme featured-slider">


                    @foreach ($random_home_posts as $post)
                    <div class="item" style="background-image:url({{ $post->thumb_url }})">
                        <div class="featured-post">
                            <div class="post-content">
                                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                <h2 class="post-title title-extra-large">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                </h2>
                                <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                            </div>
                        </div><!--/ Featured post end -->

                    </div><!-- Item 1 end -->
                    @endforeach
                </div><!-- Featured owl carousel end-->
            </div><!-- Col 7 end -->

            <div class="col-md-5 col-xs-12 pad-l">
                <div class="row">

                    @php $l = 0; @endphp
                    @foreach ($home_posts as $post)

                        @if($l == 0)
                    <div class="col-sm-12">
                        <div class="post-overaly-style contentTop hot-post-top clearfix">
                            <div class="post-thumb">
                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                    <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                <h2 class="post-title title-large">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                </h2>
                                <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                            </div><!-- Post content end -->
                        </div><!-- Post Overaly end -->
                    </div><!-- Col end -->
                        @elseif($l == 1)
                    <div class="col-sm-6 pad-r-small">
                        <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                            <div class="post-thumb">
                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                    <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                <h2 class="post-title title-medium">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Post Overaly end -->
                    </div><!-- Col end -->
                    @else
                    <div class="col-sm-6 pad-l-small">
                        <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                            <div class="post-thumb">
                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                    <img class="img-responsive" src="{{ $post->thumb_url }}" alt="" />
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                <h2 class="post-title title-medium">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Post Overaly end -->
                    </div><!-- Col end -->
                        @endif
                            @php $l++; @endphp
                    @endforeach
                </div>
            </div><!-- Col 5 end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Trending post end -->

<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <ul class="latest-news block color-red">
                    <h3 class="block-title"><span>Latest News</span></h3>

                    <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                        <div class="item">
                            <ul class="list-post">
                        @php $count = 1; @endphp
                        @foreach ($latest_home_posts as $post)


                                <li class="clearfix">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}"><img class="img-responsive" src="{{ $post->thumb_url }}" alt="" /></a>
                                        </div>
                                        <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                        <div class="post-content">
                                            <h2 class="post-title title-medium">
                                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a></span>
                                                <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style end -->
                                </li><!-- Li end -->
                                <div class="gap-30"></div>
                            @if(($count % 2) == 0)
                            </ul><!-- List post 1 end -->
                        </div><!-- Item 1 end -->
                        <div class="item" ><!-- List post 1 end -->
                    <ul class="list-post" ><!-- Item 1 end -->
                                    @else

                                    @endif

                            @php $count++; @endphp

                        @endforeach

                    </div><!-- Latest News owl carousel end-->
                </div><!--- Latest news end -->

                <div class="gap-50"></div>

                <!--- Featured Tab startet -->
                <div class="featured-tab color-blue">
                    <h3 class="block-title"><span>{{ $data['category_array']['5d7b520b60b8e37981b55477'][0] }}</span></h3>
                    <!--ul class="nav nav-tabs">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
						  			<span class="tab-head">
										<span class="tab-text-title">Gadgets</span>
									</span>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Games</span>
									</span>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Robotics</span>
									</span>
                            </a>
                        </li>
                    </ul-->

                    <div class="tab-content">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <div class="row">
                                @php $i=1; @endphp
                                @foreach ($after_latest_posts as $post)
                                <div class="col-md-6 col-sm-6">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                            </a>
                                        </div>
                                        <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a></span>
                                                <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                            </div>
                                            <p>{{ $post->desc  }}...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style end -->
                                </div><!-- Col end -->
                                    @if($i == 1)
                                        @break
                                    @endif
                                    @php $i++; @endphp
                                @endforeach
                                <div class="col-md-6 col-sm-6">
                                    <div class="list-post-block">
                                        <ul class="list-post">
                                            @php $j=1; @endphp
                                            @foreach ($after_latest_posts as $post)
                                                @if($j == 1)

                                                @else
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                            <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                                        </a>
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
                                                @endif
                                                    @php $j++; @endphp
                                            @endforeach
                                        </ul><!-- List post end -->
                                    </div><!-- List post block end -->
                                </div><!-- List post Col end -->
                            </div><!-- Tab pane Row 1 end -->
                        </div><!-- Tab pane 1 end -->

                    </div><!-- tab content -->
                </div><!-- Technology Tab end -->

                <div class="gap-40"></div>

                <div class="block color-orange">
                    <h3 class="block-title"><span>Other</span></h3>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">

                            @php $k=1; @endphp
                            @foreach ($random_one_home_posts as $post)

                                @if($k == 1)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                    <h2 class="post-title">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->

                            <div class="list-post-block">
                                <ul class="list-post">
                                    @else
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                    <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
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
                                    @endif
                                    @php $k++; @endphp
                                    @endforeach


                                </ul><!-- List post end -->
                            </div><!-- List post block end -->
                        </div><!-- Col 1 end -->

                        <div class="col-md-6 col-sm-6">

                            @php $k=1; @endphp
                            @foreach ($random_two_home_posts as $post)

                                @if($k == 1)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_array'][$post->category][0] }}</a>
                                    <h2 class="post-title">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->

                            <div class="list-post-block">
                                <ul class="list-post">
                                    @else
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                    <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
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
                                    @endif
                                    @php $k++; @endphp
                                    @endforeach


                                </ul><!-- List post end -->
                            </div><!-- List post block end -->
                        </div><!-- Col 2 end -->


                    </div><!-- Row end -->
                </div><!-- Block Lifestyle end -->


            </div><!-- Content Col end -->

            @include('sidebar')

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->

<section class="ad-content-area text-center no-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- /21689237362/thoisu247-header -->
                <div style="width: 728px; height: 90px;" id='div-gpt-ad-1575461841526-0'>
                    <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575461841526-0'); });
                    </script>
                </div>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Ad content top end -->

<section class="block-wrapper">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="block color-dark-blue">
                    <h3 class="block-title"><span>{{ $data['category_array']['5d81b4e9626f8bd86577b633'][0] }}</span></h3>

                    @php $k=1; @endphp
                    @foreach ($after_ad_one_home_posts as $post)
                        @if($k == 1)
                    <div class="post-overaly-style clearfix">
                        <div class="post-thumb">
                            <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                            </a>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title title-small">
                                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                            </div>
                        </div><!-- Post content end -->
                    </div><!-- Post Overaly Article end -->

                    <div class="list-post-block">
                        <ul class="list-post">
                            @else
                            <li class="clearfix">
                                <div class="post-block-style post-float clearfix">
                                    <div class="post-thumb">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                            <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                        </a>
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
                            @endif
                        @php $k++; @endphp

                        @endforeach
                        </ul><!-- List post end -->
                    </div><!-- List post block end -->
                </div><!-- Block end -->
            </div><!-- Travel Col end -->

            <div class="col-md-4">
                <div class="block color-aqua">
                    <h3 class="block-title"><span>{{ $data['category_array']['5d7b520b60b8e37981b55477'][0] }}</span></h3>

                    @php $k=1; @endphp
                    @foreach ($after_ad_two_home_posts as $post)
                        @if($k == 1)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->

                            <div class="list-post-block">
                                <ul class="list-post">
                                    @else
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                                    </a>
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
                                    @endif
                                        @php $k++; @endphp

                                        @endforeach
                        </ul><!-- List post end -->
                    </div><!-- List post block end -->
                </div><!-- Block end -->
            </div><!-- Gadget Col end -->

            <div class="col-md-4">
                <div class="block color-violet">
                    <h3 class="block-title"><span>{{ $data['category_array']['5d80e961626f8bd8657773b4'][0] }}</span></h3>

                    @php $k=1; @endphp
                    @foreach ($after_ad_third_home_posts as $post)
                        @if($k == 1)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->

                            <div class="list-post-block">
                                <ul class="list-post">
                                    @else
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                                    </a>
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
                                    @endif
                                        @php $k++; @endphp
                                        @endforeach
                        </ul><!-- List post end -->
                    </div><!-- List post block end -->
                </div><!-- Block end -->
            </div><!-- Health Col end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- 2nd block end -->

<section class="block-wrapper video-block">
    <div class="container">
        <div class="row">
            <div class="video-tab clearfix">
                <h2 class="video-tab-title">Watch Now</h2>
                <div class="col-md-7 pad-r-0">
                    <div class="tab-content">
                        <div class="tab-pane active animated fadeIn" id="video1">
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video4.jpg" alt="" />
                                    <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                        <div class="video-icon">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                </div><!-- Post thumb end -->
                                <div class="post-content">
                                    <a class="post-cat" href="#">Video</a>
                                    <h2 class="post-title">
                                        <a href="#">Is Running Good for You, Health Benefits of Morning Running</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        </div><!--Tab pane 1 end-->

                        <div class="tab-pane animated fadeIn" id="video2">
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video3.jpg" alt="" />
                                    <a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
                                        <div class="video-icon">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                </div><!-- Post thumb end -->
                                <div class="post-content">
                                    <a class="post-cat" href="#">Video</a>
                                    <h2 class="post-title title-medium">
                                        <a href="#">Breeze through 17 locations in Europe in this breathtaking video</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article 2 end -->
                        </div><!--Tab pane 2 end-->

                        <div class="tab-pane animated fadeIn" id="video3">
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video2.jpg" alt="" />
                                    <a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
                                        <div class="video-icon">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                </div><!-- Post thumb end -->
                                <div class="post-content">
                                    <a class="post-cat" href="#">Video</a>
                                    <h2 class="post-title title-medium">
                                        <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article 2 end -->
                        </div><!--Tab pane 2 end-->


                    </div><!-- Tab content end -->
                </div><!--Tab col end -->

                <div class="col-md-5 pad-l-0">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a class="animated fadeIn" href="#video1" data-toggle="tab">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video4.jpg" alt="" />
                                </div><!-- Post thumb end -->
                                <h3>Is Running Good for You, Health Benefits of Morning Running</h3>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#video2" data-toggle="tab">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video3.jpg" alt="" />
                                </div><!-- Post thumb end -->
                                <h3>Breeze through 17 locations in Europe in this breathtaking video</h3>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#video3" data-toggle="tab">
                                <div class="post-thumb">
                                    <img class="img-responsive" data-original="images/news/video/video2.jpg" alt="" />
                                </div><!-- Post thumb end -->
                                <h3>TG G6 will have dual 13-megapixel cameras on the back</h3>
                            </a>
                        </li>
                    </ul>
                </div><!--Tab nav col end -->
            </div><!-- Video tab end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Video block end -->




<section class="ad-content-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- /21689237362/thoisu247-header -->
                <div style="width: 728px; height: 90px;" id='div-gpt-ad-1575461841526-0'>
                    <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575461841526-0'); });
                    </script>
                </div>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Ad content two end -->
@include('footer')
