@include('header')
<section class="featured-post-area no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div id="search-filter" class="col-lg-4">
                    <div>
                        <h4>Chế độ tìm kiếm</h4>
                        <ul>
                            <li  class="active"  >
                                <label>
                                    <input type="radio" class="" name="search_mode"   checked="checked"  value="2" />
                                    <span class="check-symbol"></span>
                                    Tất cả
                                </label>
                            </li>
                            <li >
                                <label> 
                                    <input type="radio" class="" name="search_mode"   value="1" />
                                    <span class="check-symbol"></span>
                                    Tiêu đề và nội dung chính
                                </label>
                            </li>
                            <li  >
                                <label>
                                    <input type="radio" class="" name="search_mode"  value="3" />
                                    <span class="check-symbol"></span>
                                    Tác giả
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Thời gian đăng</h4>
                        <ul>
                            <li  class="active"  >
                                <label>
                                    <input type="radio" class="" name="date_filter"  checked="checked"  value="alltime">
                                    <span class="check-symbol"></span>
                                    Tất cả
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="date_filter"  value="today">
                                    <span class="check-symbol"></span>
                                    Hôm nay
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="date_filter"  value="7daysago">
                                    <span class="check-symbol"></span>
                                    7 ngày trước
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="date_filter"  value="30daysago">
                                    <span class="check-symbol"></span>
                                    30 ngày trước
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="date_filter" value="other" >
                                    <span class="check-symbol"></span>
                                    Khác
                                </label>
                                <!-- <input type="text" id="custom_date_filter" value=""/> -->
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Loại bài</h4>
                        <ul>
                            <li  class="active" >
                                <label>
                                    <input type="radio" class="" name="content_type"  checked="checked"  value="0" />
                                    <span class="check-symbol"></span>
                                    Tất cả
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="content_type"  value="Video-4" />
                                    <span class="check-symbol"></span>
                                    Video
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="content_type"  value="Picture-2" />
                                    <span class="check-symbol"></span>
                                    Ảnh
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="content_type"  value="Infographic-128" />
                                    <span class="check-symbol"></span>
                                    Infographic
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="content_type"  value="Topic-3546" />
                                    <span class="check-symbol"></span>
                                    Long-form
                                </label>
                            </li>
                            <li >
                                <label>
                                    <input type="radio" class="" name="content_type"  value="Topic-3535" />
                                    <span class="check-symbol"></span>
                                    Quizz
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <!----- New changes --->

                    <div class="section-header">
                        <h2 >{{$search_text}}</h2>
                        <p>{{$sum_records}} kết quả phù hợp</p>
                    </div>
                    
                    <div class="section-content">
                        <div class="filter">
                            <div class="groupSelect">
                                <!-- Filtering by category  -->
                                <p>
                                    <select name="category">
                                        <option value="0">Tất cả chuyên mục</option>
                                        



                                        <option value="thoi-su" >
                                            Thời sự
                                        </option>


                                        <option value="phap-luat" >
                                            Pháp luật
                                        </option>


                                        <option value="the-gioi" >
                                            Thế giới
                                        </option>


                                        <option value="xuat-ban" >
                                            Xuất bản
                                        </option>


                                        <option value="kinh-doanh-tai-chinh" >
                                            Kinh doanh
                                        </option>


                                        <option value="cong-nghe" >
                                            Công nghệ
                                        </option>


                                        <option value="the-thao" >
                                            Thể thao
                                        </option>


                                        <option value="oto-xe-may" >
                                            Xe
                                        </option>


                                        <option value="giai-tri" >
                                            Giải trí
                                        </option>


                                        <option value="am-nhac" >
                                            Âm nhạc
                                        </option>


                                        <option value="phim-anh" >
                                            Phim ảnh
                                        </option>


                                        <option value="thoi-trang" >
                                            Thời trang
                                        </option>


                                        <option value="doi-song" >
                                            Đời sống
                                        </option>


                                        <option value="giao-duc" >
                                            Giáo dục
                                        </option>


                                        <option value="suc-khoe" >
                                            Sức khỏe
                                        </option>


                                        <option value="du-lich" >
                                            Du lịch
                                        </option>


                                        <option value="am-thuc" >
                                            Ẩm thực
                                        </option>


                                        <option value="nhip-song" >
                                            Nhịp sống
                                        </option>
                                    </select>
                                </p>
                            </div>
                        <!-- layout mode (js handle)  -->
                        <!-- <ul class="groupLayout">
                            <li ><span class="ti-layout-grid2-alt"></span></li>
                            <li class="active"><span class="ti-layout-list-thumb-alt"></span></li>
                        </ul> -->
                    </div>
                </div>




                <!--end changes------->

                @php $k=1; @endphp
                @foreach ($random_home_posts as $post)
                @if($k == 1)
                <div class="col-lg-8">
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
                </div>
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



    $(document).ready(function () {
        var keyword = 'a';
        if (keyword != '') {
            keyword = keyword.trim();
            $('#search_keyword').val(keyword);
        }

        $("input[name='search_mode']").on("click", function () {
            applySearchFilter();
        });

        $("input[name='content_type']").on("click", function (e) {
            applySearchFilter();
        });

        $("input[name='date_filter']").on("click", function (e) {
            applySearchFilter();
        });

        $("select[name='category']").on("change", function (e) {
            applySearchFilter();
        });
    });

    var applySearchFilter = function () {
        $(this).parent("li").addClass("active");
        var url = '';
        var keyword = 'a';
        if (keyword != '') {
            keyword = keyword.trim();
            while (keyword.indexOf(" ") >= 0) {
                keyword = keyword.replace(" ", "-");
            }
            
           // url = "/" + keyword + "-tim-kiem.html";
           var urlNew = window.location.href.split('?')
           //alert(urlNew[0]);
           url = urlNew[0];
        }

        var filterParam = {};
        var searchMode = $("input[name='search_mode']:checked").val();
        filterParam["type"] = searchMode;

        var content_type = $("input[name='content_type']:checked").val();
        if (content_type != '0') {
            filterParam["content_type"] = content_type;
        }

        var dateFilter = $("input[name='date_filter']:checked").val();

        if (dateFilter == 'other') {
            var otherDateFilter = $("#custom_date_filter").val();
            if (otherDateFilter == '') {
                return false;
            } else {
                filterParam["date"] = otherDateFilter;
            }
        }

        if (dateFilter != "alltime" && dateFilter != "other") {
            filterParam["date"] = dateFilter;
        }

        var category = $("select[name='category']").val();
        if (category != 0) {
            filterParam['category'] = category;
        }

        var strFilterParam = jQuery.param(filterParam);
        window.location = url + (strFilterParam != '' ? ("?" + strFilterParam) : "");
        return false;
    }
</script>
