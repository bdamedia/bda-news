@include('mobileHeader')
<section style="    padding-top: 10px;" class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

               {{-- @php $p=1; @endphp
                @foreach ($data['category_array'] as $categories)--}}

                <div id="post-data" class="block category-listing category-style2">
                    @php $p=1; @endphp
                    @foreach ($posts as $post)
                    <div class="post-block-style post-list clearfix">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="post-thumb thumb-float-style">
                                    <a href="#">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                    <a class="post-cat" href="# ">{{ $data['category_array'][$post->category][0] }}</a>
                                </div>
                            </div><!-- Img thumb col end -->

                            <div class="col-md-7 col-sm-6">
                                <div class="post-content">
                                    <h2 class="post-title title-large">
                                        <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a></span>
                                        <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>

                                    </div>
                                    <p>{{ $post->desc }}...</p>
                                </div><!-- Post content end -->
                            </div><!-- Post col end -->
                        </div><!-- 1st row end -->
                    </div><!-- 1st Post list end -->
                        @php $p=1; @endphp
                    @endforeach
                    <div style="width: 300px;height: 400px" class="post-block-style post-list clearfix">
                            Ads
                    </div><!-- 1st Post list end -->
                </div><!-- Block Technology end -->
               {{-- @endforeach--}}
                <div class="ajax-load text-center" style="display:none">
                    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                </div>
            </div><!-- Content Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->
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
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('server not responding...');
            });
    }
</script>
