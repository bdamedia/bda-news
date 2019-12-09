<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Mail;
use App\index;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Alaouy\Youtube\Facades\Youtube;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $agent = new Agent();
        if($agent->isMobile()){
            $cat = Category::all();
            foreach ($cat as $cate){
                $data['posts'] = News::orderBy('date', 'desc')->paginate(10);
            }
            $data['meta_keywords'] = 'Vietnam News Daily,Economy,Online,Internet,Magazine,Gateway,FPT,Portal,Tin nhanh,cập nhật,báo điện tử,việt báo,tin việt,VietNews,mua bán,rao vặt,tư vấn,việc làm,Hà Nội,Sài Gòn,tin tức,Huế,Đà Nẵng,VDC,Netnam,Saigonnet,Sggp,VET,Nhân dân,Lao động,Kinh tế,Kinh doanh,Tin nhanh,cap nhat,bao dien tu,Vietbao,TinViet,Mua Ban,Rao Vat,Tu Van,Viec Lam,Hanoi,Ha Noi,Saigon,Sai gon,Tin tuc,Tintuc,Hue,Da Nang,Danang,Nhandan,Nhan dan,Laodong,Lao dong,Kinhte,Kinh te,Kinhdoanh,Kinh doanh,Zing, Tin tức, Báo, Việt Nam, Hà Nội, Hồ Chí Minh, Đà Nẵng, Đời sống, Phóng sự, Pháp luật, Thế giới, Khám phá, Thị trường, Chứng khoán, Kinh tế, Bất động sản, Giáo dục, Tuyển sinh, Teen, Thể thao, Ngoại hạng, Champion, La liga, Công nghệ, điện thoại, Oto, Xe Máy, Giải trí, Showbiz, Sao Việt, Âm nhạc, VPOP, KPOP, Phim ảnh, Điện ảnh, Đẹp, Thời trang, Làm đẹp, Người Đẹp, Tình yêu, Du lịch, Ẩm thực, Sách, Cười,Thoisu247, Thời Sự 247, Thời Sự 24h';
            $data['meta_desc'] = 'Tin tức mới nhất - Thông tin nhanh & chính xác được cập nhật hàng giờ. Đọc báo tin tức online Việt Nam & Thế giới nóng nhất trong ngày về Thời sự, Pháp luật, Kinh doanh, Đời sống - Xã hội, Kinh tế, Thế giới, Thể thao, Giải trí, Công nghệ và nhiều lĩnh vực khác';
            $data['cname'] = 'thoi-su';
            $data['page_name'] = 'Thời sự 247 - Tin tức, hình ảnh mới nhật cập nhật 24H!';

            if ($request->ajax()) {
                $view = view('mobileData',$data)->render();
                return response()->json(['html'=>$view]);
            }

            return view('mobileIndex')->with($data);
            }else{
            $data['random_home_posts'] = News::orderBy('date', 'desc')->take(5)->get();
            $data['single_home_posts'] = News::orderBy('date', 'desc')->skip(6)->take(1)->get();
            $data['home_posts'] = News::orderBy('date', 'desc')->skip(6)->take(3)->get();
            $data['latest_home_posts'] = News::orderBy('date', 'desc')->skip(9)->take(50)->get();
            $data['single_category_home_posts'] = News::orderBy('date', 'desc')->take(14)->get()->random(14);
            $data['random_one_home_posts'] = News::orderBy('date', 'desc')->skip(59)->take(5)->get();
            $data['random_two_home_posts'] = News::orderBy('date', 'desc')->skip(64)->take(5)->get();
            //echo $key = array_rand($data);
            $cat = Category::where('slug','thoi-su')->get();
            $cat_id = collect($cat)->first()->id; // no error
            $data['after_latest_posts'] = News::where('category',$cat_id)->orderBy('date', 'desc')->take(5)->get()->random(5);
            $data['after_ad_one_home_posts'] = News::where('category','5d81b4e9626f8bd86577b633')->orderBy('date', 'desc')->skip(64)->take(4)->get();
            $data['after_ad_two_home_posts'] = News::where('category','5d7b520b60b8e37981b55477')->orderBy('date', 'desc')->skip(64)->take(4)->get();
            $data['after_ad_third_home_posts'] = News::where('category','5d80e961626f8bd8657773b4')->orderBy('date', 'desc')->skip(64)->take(4)->get();

            $data['four_section_one_home_posts'] = News::where('category','5d80e236626f8bd865776ed5')->orderBy('date', 'desc')->skip(64)->take(4)->get();
            $data['four_section_two_home_posts'] = News::where('category','5d81b607626f8bd86577b6d1')->orderBy('date', 'desc')->skip(64)->take(4)->get();
            $data['four_section_third_home_posts'] = News::where('category','5d81b566626f8bd86577b682')->orderBy('date', 'desc')->skip(64)->take(4)->get();
            $data['four_section_four_home_posts'] = News::where('category','5d81b597626f8bd86577b695')->orderBy('date', 'desc')->skip(64)->take(4)->get();

            $data['cname'] = 'thoi-su';
            $data['page_name'] = 'Tin tức, hình ảnh mới nhật cập nhật 24H!';
            $data['meta_keywords'] = 'Vietnam News Daily,Economy,Online,Internet,Magazine,Gateway,FPT,Portal,Tin nhanh,cập nhật,báo điện tử,việt báo,tin việt,VietNews,mua bán,rao vặt,tư vấn,việc làm,Hà Nội,Sài Gòn,tin tức,Huế,Đà Nẵng,VDC,Netnam,Saigonnet,Sggp,VET,Nhân dân,Lao động,Kinh tế,Kinh doanh,Tin nhanh,cap nhat,bao dien tu,Vietbao,TinViet,Mua Ban,Rao Vat,Tu Van,Viec Lam,Hanoi,Ha Noi,Saigon,Sai gon,Tin tuc,Tintuc,Hue,Da Nang,Danang,Nhandan,Nhan dan,Laodong,Lao dong,Kinhte,Kinh te,Kinhdoanh,Kinh doanh,Zing, Tin tức, Báo, Việt Nam, Hà Nội, Hồ Chí Minh, Đà Nẵng, Đời sống, Phóng sự, Pháp luật, Thế giới, Khám phá, Thị trường, Chứng khoán, Kinh tế, Bất động sản, Giáo dục, Tuyển sinh, Teen, Thể thao, Ngoại hạng, Champion, La liga, Công nghệ, điện thoại, Oto, Xe Máy, Giải trí, Showbiz, Sao Việt, Âm nhạc, VPOP, KPOP, Phim ảnh, Điện ảnh, Đẹp, Thời trang, Làm đẹp, Người Đẹp, Tình yêu, Du lịch, Ẩm thực, Sách, Cười,Thoisu247, Thời Sự 247, Thời Sự 24h';
            $data['meta_desc'] = 'Tin tức mới nhất - Thông tin nhanh & chính xác được cập nhật hàng giờ. Đọc báo tin tức online Việt Nam & Thế giới nóng nhất trong ngày về Thời sự, Pháp luật, Kinh doanh, Đời sống - Xã hội, Kinh tế, Thế giới, Thể thao, Giải trí, Công nghệ và nhiều lĩnh vực khác';
            $videoList = Youtube::getPopularVideos('us');
            $data['videos'] = $videoList;

            return view('index')->with($data);
        }



    }

    /**
     * Show the form for aboutus a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  aboutus($slug) {

        return view($slug);
    }

    /**
     * Show the form for writeus a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  writeus() {

        return view('writeus');
    }

    /**
     * Show the form for advertise a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  advertise() {

        return view('advertise');
    }

    /**
     * Show the form for contact a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  contact() {

        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        //print_r($request->input('message'));

        /*Mail::raw($subject, function($message)
        {
            $message->from('kuldeep.raj@dba_media', 'BDA');
            $message->to("kuldeep.raj@dba_media")->cc("kuldeep.raj@dba_media");
        });*/
        //Mail::to("kuldeep.raj@bda.media")->send(new DemoMail());
        $data['message'] = 'Thanks for sharing some information';
        return  view('message')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(index $index)
    {
        //
    }
}
