<?php

namespace App\Providers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use View;
use Route;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $data['brand'] = 'Thời sự 247';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $category = Category::all();
        $arrayCat = array();
        foreach ($category as $cat){
            $arrayCat[$cat->_id][] = $cat->name;
            $arrayCat[$cat->_id][] = $cat->slug;
        }

        $data['menus'] = $category;
        $cat_slug = array_values(array_filter(explode('/',$request->getRequestUri())));

        if(isset($cat_slug) && count($cat_slug) > 0){
            if($cat_slug[0] == 'top' || $cat_slug[0] == 'search'){
                $cat_slug = 'thoi-su';
            }else{

                if(strpos($cat_slug[0],'?')){
                    $catpagecheck = explode('?',$cat_slug[0]);
                    $cat_slug = $catpagecheck[0];
                }else{
                    $cat_slug = $cat_slug[0];
                }


            }

        }else{
            $cat_slug = 'thoi-su';
        }

        if ($cat_slug[0] == 'search') {
            $cat_slug  = "thoi-su";
            $cat_name = 'search';
        } else {
            $catresult = Category::where('slug',$cat_slug)->get();
            if(isset(collect($catresult)->first()->name)) {
                $cat_name = collect($catresult)->first()->name; // no error
                $cat_id = collect($catresult)->first()->id; // no error
            } else {
                $cat_name = $cat_slug[0];
            }
        }
        //$cat_slug  = "thoi-su";
        //$catresult = Category::where('slug',$cat_slug)->get();
        //$cat_name = collect($catresult)->first()->name; // no error
        //$cat_id = collect($catresult)->first()->id; // no error

        $randomPosts = News::orderBy('date', 'desc')->take(5)->get()->random(5);
        $popularPosts = News::orderBy('date', 'desc')->take(1)->get()->random(1);
        $data['footer_one_home_posts'] = News::where('category','5d81b4e9626f8bd86577b633')->orderBy('date', 'desc')->take(5)->get()->random(4);
        $data['footer_two_home_posts'] = News::where('category','5d7b520b60b8e37981b55477')->orderBy('date', 'desc')->take(5)->get()->random(4);
        $data['footer_third_home_posts'] = News::where('category','5d80e961626f8bd8657773b4')->orderBy('date', 'desc')->take(5)->get()->random(4);
        $data['random_posts'] = $randomPosts;
        $data['popular_posts'] = $popularPosts;
        $data['category_name'] = $cat_name;
        $data['cat_slug'] = $cat_slug;
        $data['category_array'] = $arrayCat;
        $data['authors'] = array("Bích Huyền","Bùi Phái" ,"Cẩm Lệ","Cẩm Thi","Diễm Châu","Duy Tân","Đình Phong","Đức Đô","Hải Triều","Hoàng Minh","Hoàng Minh","Kim Chi","Le Hieu","Linh Đàm","Mạnh Dũng","Mạnh Tùng","Minh Hải","Mỹ Hảo","Mỹ Quỳnh","Ngọc Bích","Ngọc Dung","Ngọc Điệp","Ngọc Điệp","Ngọc Nhung","Quang Huy","Tấn Lộc","Thanh Dũng","Thanh Thuý","Thanh Triều","Thế Hùng","Thế Phương","Thu Cúc","Thu Lan","Thu Trang","Thuỳ Dung","Triều Khúc","Vĩnh Hảo","Xuân Cúc","Xuân Lan","Xuân Phú");
        $agent = new Agent();
        $data['isMobile'] = $agent->isMobile();
        view::share('data', $data);
    }
}


