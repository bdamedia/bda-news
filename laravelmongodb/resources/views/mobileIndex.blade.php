@include('header')
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">


                @foreach ($data['category_array'] as $categories)

                <div class="block category-listing category-style2">
                    <h3 class="block-title"><span>{{ $categories[0] }}</span></h3>

                    <!--ul class="subCategory unstyled">
                        <li><a href="#">Robotics</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Gadgets</a></li>
                    </ul-->

                    @foreach ($posts[$categories[1]] as $post)
                    <div class="post-block-style post-list clearfix">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="post-thumb thumb-float-style">
                                    <a href="#">
                                        <img class="img-responsive" data-original="{{ $post->thumb_url }}" alt="" />
                                    </a>
                                    <a class="post-cat" href="# ">{{ $categories[0] }}</a>
                                </div>
                            </div><!-- Img thumb col end -->

                            <div class="col-md-7 col-sm-6">
                                <div class="post-content">
                                    <h2 class="post-title title-large">
                                        <a href="/{{ $categories[1] }}/{{ $post->slug }}">{{ $post->title }}</a>
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
                </div><!-- Block Technology end -->
                @endforeach
                <div class="paging">
                    <!--ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                        <li>
                            <span class="page-numbers">Page 1 of 2</span>
                        </li>
                    </ul-->
                </div>


            </div><!-- Content Col end -->



        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->
@include('footer')
