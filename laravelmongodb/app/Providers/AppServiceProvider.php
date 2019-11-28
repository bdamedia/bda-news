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
        $data['menus'] = $category;
        $cat_slug = array_values(array_filter(explode('/',$request->getRequestUri())));
        if(isset($cat_slug) && count($cat_slug) > 0){
            if($cat_slug[0] == 'top'){
                $cat_slug = 'thoi-su';
            }else{
                $cat_slug = $cat_slug[0];
            }

        }else{
            $cat_slug = 'thoi-su';
        }

        $catresult = Category::where('slug',$cat_slug)->get();
        $cat_name = collect($catresult)->first()->name; // no error
        $cat_id = collect($catresult)->first()->id; // no error
        $randomPosts = News::where('category',$cat_id)->skip(15)->take(4)->get();
        $popularPosts = News::where('category',$cat_id)->take(1)->get();
        $data['random_posts'] = $randomPosts;
        $data['popular_posts'] = $popularPosts;
        $data['category_name'] = $cat_name;
        $data['cat_slug'] = $cat_slug;
        $data['authors'] = array("Bích Huyền","Bùi Phái" ,"Cẩm Lệ","Cẩm Thi","Diễm Châu","Duy Tân","Đình Phong","Đức Đô","Hải Triều","Hoàng Minh","Hoàng Minh","Kim Chi","Le Hieu","Linh Đàm","Mạnh Dũng","Mạnh Tùng","Minh Hải","Mỹ Hảo","Mỹ Quỳnh","Ngọc Bích","Ngọc Dung","Ngọc Điệp","Ngọc Điệp","Ngọc Nhung","Quang Huy","Tấn Lộc","Thanh Dũng","Thanh Thuý","Thanh Triều","Thế Hùng","Thế Phương","Thu Cúc","Thu Lan","Thu Trang","Thuỳ Dung","Triều Khúc","Vĩnh Hảo","Xuân Cúc","Xuân Lan","Xuân Phú");
        view::share('data', $data);
    }
}
