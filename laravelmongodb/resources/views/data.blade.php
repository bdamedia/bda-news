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
@if($data['isMobile'] && $no == 2 )
<div style="width: 351px;height: 500px;text-align: center;margin: 0 auto;" class="col-md-6 col-sm-6">
    <!-- /21689237362/thoisu247-postpage-endpost-mobile -->
    <div id='div-gpt-ad-1575892048752-0' style=''>
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1575892048752-0'); });
        </script>
    </div>
</div><!-- Col 1 end -->
@endif
