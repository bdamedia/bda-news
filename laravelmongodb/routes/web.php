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

/*Route::get('/', function () {
	// $connection = new Mongo();
	// print_r($connection);
    return view('index');
});*/

Route::group(array('namespace' => 'admin', 'prefix' => 'admin'), function() {
  Route::resource('blog', 'BlogController');
  Route::resource('/', 'BlogController');
});


Route::get('/', 'IndexController@index');
Route::resource('category','CategoryController');
Route::get('{slug}','NewsController@getnewsbycategory');
Route::get('{cat_slug}/{slug}', 'NewsController@getnews');
Route::resource('news','NewsController');

// top four pages
Route::get('top/page/{slug}', 'IndexController@aboutus');
//Route::get('top/page/{slug}', 'IndexController@writeus');
//Route::get('top/page/{slug}', 'IndexController@advertise');
//Route::get('top/page/{slug}', 'IndexController@contact');
// end four pages


//Route::resource('category/{id}', 'CategoryController@getcategory', ['parameters' => ['{id}' => 'not_id']]);

//Route::resource('category/cat/{slug}','CategoryController@getcategory');


//Route::get('category/show/{slug}', 'CategoryController@getcategory');
Route::get('news/show/{slug}', 'NewsController@getnews');
Route::post('/top/page/form/create', 'IndexController@store');
//Route::get('news/category/{id}', 'NewsController@getnewsbycategory');

Route::get('search/values/{text}', 'NewsController@getsearchvalue');