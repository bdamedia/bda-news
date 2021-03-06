@if($data['isMobile'])
    @include('mobileHeader')
@else
    @include('header')
@endif


<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="block category-listing">

                    @if($data['isMobile'])
                        <h3 class="block-title-mobile"><span>{{ $cat_name }}</span></h3>
                    @else
                    <h3 class="block-title"><span>{{ $cat_name }}</span></h3>
                    @endif

                    <div class="row" id="post-data">

                        @foreach ($category_posts as $post)

                            <div class="col-md-6 col-sm-6">
                                <div class="post-block-style post-grid clearfix">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                        </a>
                                    </div>
                                    <a class="post-cat" href="# ">{{ $cat_name }}</a>
                                    <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="/{{ $cat_slug }}/{{ $post->slug }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">{{ $data['authors'][array_rand($data['authors'])] }}</a></span>
                                            <span class="post-date">{{ $post->date->toDateTime()->format('M d, Y')  }}</span>
                                            <!--span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span-->
                                        </div>
                                        <p>{{ $post->desc }}...</p>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Col 1 end -->
                        @endforeach

                            @if($data['isMobile'])
                                <div style="width: 330px;height: 400px;margin: 0 auto;text-align: center;" class="col-md-6 col-sm-6">
                                    <!-- /21689237362/thoisu247-postpage-innerpost-mobile -->
                                    <div id='div-gpt-ad-1575892083273-0' style='width: 300px; height: 300px;'>
                                        <script>
                                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575892083273-0'); });
                                        </script>
                                    </div>

                                </div><!-- Col 1 end -->
                            @endif
                    </div><!-- Row end -->
                </div><!-- Block Lifestyle end -->

                    <div class="ajax-load text-center" style="display:none">
                        <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                    </div>
                    {{--{{ $category_posts }}--}}
            </div><!-- Content Col end -->
            @if($data['isMobile'])

            @else
                @include('sidebar')
            @endif


        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->

<script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type" : "WebSite",
"name" : "{{ $page_name ?? '' }}",
"alternateName" : "{{ $meta_desc }}",
"dateModified": "",
"url" : "/{{ $cat_slug }}"
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
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('server not responding...');
            });
    }
</script>



