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
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Blog
Route::group(['prefix' => 'blog'], function(){
  // blog show
  Route::get('/', 'BlogController@index');
  //post subs
  Route::post('/', 'BlogController@subs');
  Route::get('/{slug}', 'BlogController@show');
  //show category
  //belum ada
  //post show

});

// Blog admin
Route::group(['middleware' => 'auth'], function(){
  Route::get('admin/list', 'DashController@daftar')->name('daftar');
  Route::resource('admin', 'DashController');
});

// Squad admin
Route::group(['middleware' => 'auth'], function(){
  Route::get('admin/member/list', 'MemberController@list');
});
