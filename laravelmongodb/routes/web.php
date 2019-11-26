<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	// $connection = new Mongo();
	// print_r($connection);
    return view('welcome');
});

Route::resource('category','CategoryController');

//Route::resource('category/{id}', 'CategoryController@getcategory', ['parameters' => ['{id}' => 'not_id']]);

//Route::resource('category/cat/{slug}','CategoryController@getcategory');


Route::get('category/show/{slug}', 'CategoryController@getcategory');
