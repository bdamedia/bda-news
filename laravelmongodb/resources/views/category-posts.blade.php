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

                    <div class="row" id="post-data">

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


                    </div><!-- Row end -->
                </div><!-- Block Lifestyle end -->

                <div class="paging">
                    {{--{{ $category_posts }}--}}
                </div><!-- Paging end -->
            </div><!-- Content Col end -->
            @include('sidebar')
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->

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
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('server not responding...');
            });
    }
</script>
