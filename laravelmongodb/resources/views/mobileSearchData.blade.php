@foreach ($random_home_posts as $post)
    <li class="clearfix">
        <div class="post-block-style post-float clearfix">
            <div class="post-thumb">
                <a href="/{{ $data['category_array'][$post->category][1] }}/{{ $post->slug }}">
                    <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                </a>
                <a class="post-cat" href="/{{ $data['category_array'][$post->category][1] }}">{{ $cat_name ?? '' }}</a>
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
