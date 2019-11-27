<?php

namespace App\Http\Controllers;

use App\Category;
use App\news;
use Illuminate\Http\Request;

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

    public function getnews($cat_slug,$slug){

        $cat1 = Category::where('slug',$cat_slug)->get();
        $data['brand'] = 'Bda News';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $results = News::where('slug',$slug)->get();
        $category = Category::all();
        $post = json_decode($results,true);
        $data['post'] = $post[0];
        $data['cat_name'] = collect($cat1)->first()->name;
        $data['menus'] = $category;
        return view('single-post')->with($data);
    }

    public function getnewsbycategory($slug){

        $cat = Category::where('slug',$slug)->get();
        $cat_id = collect($cat)->first()->id; // no error
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;
        $data['cat_slug'] = $slug;
        $data['cat_name'] = collect($cat)->first()->name;
        $results = News::where('category',$cat_id)->paginate(10);
        $data['category_posts'] = $results;
        return view('category-posts')->with($data);

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
