<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\DemoMail;
use App\Category;
use App\index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
