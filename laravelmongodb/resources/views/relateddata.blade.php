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
