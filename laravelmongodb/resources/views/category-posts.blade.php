@include('header')
@foreach ($category_posts as $post)
    <li>
        <a href="{{ $cat_slug }}/{{ $post->slug }}">{{ $post->title }}</a>
    </li>
@endforeach

@include('footer')
