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
