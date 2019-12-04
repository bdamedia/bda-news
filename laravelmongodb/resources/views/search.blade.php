@include('header')
<section class="featured-post-area no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                @php $k=1; @endphp
                @foreach ($random_home_posts as $post)
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
                    <ul class="list-post" id="post-data-search">
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

        </div>
    </div>
</section><!-- Trending post end -->


<section class="ad-content-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img class="img-responsive" data-original="images/banner-ads/ad-content-two.png" alt="" />
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Ad content two end -->
@include('footer')

<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        console.log($('footer').height())
        console.log($(document).height())
        console.log($(window).height())
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
                $("#post-data-search").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('server not responding...');
            });
    }
</script>
