<?php

namespace App\Providers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use View;
use Route;
use Illuminate\Support\ServiceProvider;

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
        $data['brand'] = 'Bda News';
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
            if($cat_slug[0] == 'top'){
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
        //$cat_slug  = "thoi-su";
        $catresult = Category::where('slug',$cat_slug)->get();
        $cat_name = collect($catresult)->first()->name; // no error
        $cat_id = collect($catresult)->first()->id; // no error
        $randomPosts = News::get()->random(5);
        $popularPosts = News::take(1)->get()->random(1);
        $data['random_posts'] = $randomPosts;
        $data['popular_posts'] = $popularPosts;
        $data['category_name'] = $cat_name;
        $data['cat_slug'] = $cat_slug;
        $data['category_array'] = $arrayCat;
        $data['authors'] = array("Bích Huyền","Bùi Phái" ,"Cẩm Lệ","Cẩm Thi","Diễm Châu","Duy Tân","Đình Phong","Đức Đô","Hải Triều","Hoàng Minh","Hoàng Minh","Kim Chi","Le Hieu","Linh Đàm","Mạnh Dũng","Mạnh Tùng","Minh Hải","Mỹ Hảo","Mỹ Quỳnh","Ngọc Bích","Ngọc Dung","Ngọc Điệp","Ngọc Điệp","Ngọc Nhung","Quang Huy","Tấn Lộc","Thanh Dũng","Thanh Thuý","Thanh Triều","Thế Hùng","Thế Phương","Thu Cúc","Thu Lan","Thu Trang","Thuỳ Dung","Triều Khúc","Vĩnh Hảo","Xuân Cúc","Xuân Lan","Xuân Phú");
        view::share('data', $data);
    }
}


