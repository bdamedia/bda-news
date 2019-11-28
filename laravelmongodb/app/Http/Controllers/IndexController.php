<?php

namespace App\Http\Controllers;

use Mail;
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
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['navsearch'] = 'Search Now!';

        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.';

        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;

        return view('index')->with($data);
    }

    /**
     * Show the form for aboutus a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  aboutus($slug) {
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['navsearch'] = 'Search Now!';
        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;
        return view($slug)->with($data);
    }

    /**
     * Show the form for writeus a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  writeus() {
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['navsearch'] = 'Search Now!';
        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;
        return view('writeus')->with($data);
    }

    /**
     * Show the form for advertise a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  advertise() {
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['navsearch'] = 'Search Now!';
        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;
        return view('advertise')->with($data);
    }

    /**
     * Show the form for contact a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  contact() {
        $category = Category::all();
        $data['brand'] = 'Bda News';
        $data['navsearch'] = 'Search Now!';
        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.';
        $data['footer'] = 'Trademark, Copyright, and all that Jazz';
        $data['menus'] = $category;
        return view('contact')->with($data);
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
