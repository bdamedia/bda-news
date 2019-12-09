<?php

namespace App\Http\Controllers;

use App\Category;
use App\news;
use Illuminate\Http\Request;
use Carbon\Traits\Date;

class NewsController extends Controller
{

    /**
     * Instantiate a new UserController instance.
     */
   /* public function __construct($cat_slug=null,$slug=null)
    {
        $data['cat'] = Category::where('slug',$slug)->get();
        print_r($data);
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return $news;
    }

    public function getnews(Request $request,$cat_slug,$slug){

        $cat1 = Category::where('slug',$cat_slug)->get();
        $data['cat_slug'] = $cat_slug;
        $results = News::where('slug',$slug)->get();
        $post = json_decode($results,true);
        $data['post'] = $post[0];
        $title = $post[0]['title'];
        $data['cat_name'] = collect($cat1)->first()->name;
        $titleArray = explode(' ',$title);
        $reletedPosts = News::where('category',collect($cat1)->first()->id)->orderBy('date', 'desc')->paginate(3);
        $data['releted_posts'] = $reletedPosts;
        $data['page_name'] = $title;
        $data['meta_keywords'] = str_replace(' ',',',$title);
        $data['meta_desc'] = $post[0]['desc'];
        $data['og_image'] = $post[0]['thumb_url'];
        $data['date'] = collect($results)->first()->date->toDateTime()->format('M d, Y');
        if ($request->ajax()) {
            $view = view('relateddata',$data)->render();
            return response()->json(['html'=>$view]);
        }
        return view('single-post')->with($data);
    }

    public function getnewsbycategory(Request $request,$slug){

        $cat = Category::where('slug',$slug)->get();
        $cat_id = collect($cat)->first()->id; // no error
        $data['cat_slug'] = $slug;
        $data['cat_name'] = collect($cat)->first()->name;
        $results = News::where('category',$cat_id)->orderBy('date', 'desc')->paginate(10);
        $data['category_posts'] = $results;
        $data['page_name'] = collect($cat)->first()->title;
        $data['meta_keywords'] = collect($cat)->first()->keywords;
        $data['meta_desc'] = collect($cat)->first()->desc;
        $data['og_image'] = collect($cat)->first()->thumb_url;
        if ($request->ajax()) {
            $view = view('data',$data)->render();
            return response()->json(['html'=>$view]);
        }

        return view('category-posts')->with($data);

    }

    public function getsearchvalue(Request $request, $slug){
        $seachVAlue = last(request()->segments());
        $seachType = $request->input('type');
        $searchDate = $request->input('date');
        $searchContant = $request->input('content_type');
        $searchCategory = $request->input('category');
        //print_r($request->input('type'));
        //print_r($request->input('date'));
        //print_r($request->input('content_type'));
        //print_r($request->input('category'));
        //die();
        //$data['random_home_posts'] = News::where('title','like',"%$seachVAlue%")->orderBy('date', 'desc')->paginate(10);
        $data['random_home_posts'] = News::where('title','like',"%$seachVAlue%")
            ->orWhere('date', $searchDate)
            ->orWhere('category', $searchCategory)
            ->orWhere('slug', $seachType)
            ->orderBy('date', 'desc')->paginate(10);
        //$query->select(DB::raw("SUM(amount_total) as paidsum"))->where('status', 'paid');
        //print_r($data['random_home_posts']);
        //die();
        if ($request->ajax()) {
            $view = view('searchdata',$data)->render();
            return response()->json(['html'=>$view]);
        }
        $data['sum_records'] = count($data['random_home_posts']);
        $data['search_text'] = $seachVAlue;
        return view('search')->with($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        $results = compact('news');
        return $results;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
}
