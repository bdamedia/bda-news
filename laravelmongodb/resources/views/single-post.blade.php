
@if($data['isMobile'])
    @include('mobileHeader')
@else
    @include('header')
    @endif

<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="single-post">

                    <div class="post-title-area">
                        <a class="post-cat" href="/{{ $cat_slug }}">{{ $cat_name }}</a>
                        <h2 class="post-title">
                            {{ $post['title'] ?? '' }}
                        </h2>
                        <div class="post-meta">
								<span class="post-author">
									By <a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a>
								</span>
                            <span class="post-date"><i class="fa fa-clock-o"></i>{{ $date }}</span>
                            <!--span class="post-hits"><i class="fa fa-eye"></i> 21</span>
                            <span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span-->
                        </div>
                    </div><!-- Post title end -->

                    <div class="post-content-area">
                        <div class="post-media post-featured-image">
                            <a href="{{ $post['images'][0] ?? '' }}" class="gallery-popup"><img src="{{ $post['images'][0] ?? '' }}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="entry-content">
                            @php
                                $ps=1;

                                 $count = round(count($post['content']) / 2);
                            @endphp
                            {{--{{ print_r($post['content']) }}--}}
                            @foreach ($post['content'] as $content)
                               <p> {{ $content ?? '' }} </p>
                                @if($data['isMobile'])
                                @if($count == $ps)
                                    <div style="width: 300px;height: 400px" class="post-block-style post-list clearfix">
                                        <!-- /21689237362/thoisu247-postpage-innerpost-mobile -->
                                        <div id='div-gpt-ad-1575885395800-0'>
                                            <script>
                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575885395800-0'); });
                                            </script>
                                        </div>
                                    </div><!-- 1st Post list end -->
                                @endif
                                @endif
                                @php $ps++; @endphp
                            @endforeach
                        </div><!-- Entery content end -->
                        <div style="width: 300px;height: 400px" class="post-block-style post-list clearfix">

                        @if($data['isMobile'])
                            <!-- /21689237362/thoisu247-postpage-endpost-mobile -->
                                <div id='div-gpt-ad-1575885322013-0'>
                                    <script>
                                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575885322013-0'); });
                                    </script>
                                </div>
                            @else
                            <!-- /21689237362/thoisu247-postpage-endpost-desktop -->
                            <div id='div-gpt-ad-1575885246511-0'>
                                <script>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575885246511-0'); });
                                </script>
                            </div>
                            @endif
                        </div><!-- 1st Post list end -->
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
                                <li  class="fb-share-button" data-href="{{ Request::fullUrl() }}" data-layout="button" data-size="large" class="facebook">
                                    <a class="fb-share-button" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" >
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank"  href="https://twitter.com/intent/tweet?url={{ Request::fullUrl() }}&via=BDA&text={{ $post['title'] ?? '' }}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="gplus">
                                    <a target="_blank" href="https://plus.google.com/share?url={{ Request::fullUrl() }}">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a target="_blank" href="https://in.pinterest.com/pin/create/button/?url={{ Request::fullUrl() }}&description={{ $post['title'] ?? '' }}&media={{ $post['images'][0] ?? '' }}">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Share items end -->

                    </div><!-- post-content end -->
                </div><!-- Single post end -->

                <!--nav class="post-navigation clearfix">
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
                </nav--><!-- Post navigation end -->

                <!--div class="author-box">
                    <div class="author-img pull-left">
                        <img src="{{ URL::asset('images/news/author.png') }}"  alt="">
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
                </div--> <!-- Author box end -->

                <div class="related-posts block">
                    <h3 class="block-title"><span>Related Posts</span></h3>

                    <div id="latest-news-slide" class="owl-carousel1 owl-theme1 latest-news-slide1">


                        @foreach ($releted_posts as $post)
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}"><img class="img-responsive" src="{{ $post->thumb_url }}" alt="" /></a>
                                </div>
                                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $data['category_name'] }}</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="/{{ $cat_slug }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a></span>
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div><!-- Item 1 end -->
                        @endforeach

                    </div><!-- Carousel end -->
                    <div class="ajax-load text-center" style="display:none">
                        <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                    </div>
                </div><!-- Related posts end -->
            </div><!-- Content Col end -->
            @include('sidebar')
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "/{{ $cat_slug }}/{{ $post->slug }}"
  },
  "headline": "{{ $post->title }}",
  "image": [
    "{{ $post->thumb_url }}"
   ],
  "datePublished": "{{ $post->date->toDateTime()->format('M d, Y')  }}",
  "dateModified": "{{ $post->date->toDateTime()->format('M d, Y')  }}",
  "author": {
    "@type": "Person",
    "name": "{{ $data['authors'][array_rand($data['authors'])] }}"
  },
   "publisher": {
    "@type": "Organization",
    "name": "BDA News",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ URL::asset('images/logos/logo.png') }}"
    }
  },
  "description": "{{ $post->desc }}"
}

</script>

@include('footer')
<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height()  >= $(document).height() - $('footer').height()) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
        $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("img").lazyload({
                    effect : "fadeIn",
                    effectTime: 1500
                });
                $("#latest-news-slide").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('server not responding...');
            });
    }
</script>
