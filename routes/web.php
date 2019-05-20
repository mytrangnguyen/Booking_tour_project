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
    return view('welcome');
});

Route::get('index',[
	'as'=>'trangchu',
	'uses'=>'page_controller@getIndex'
]);
Route::get('about',[
	'as'=>'gioithieu',
	'uses'=>'page_controller@getAbout'
]);
Route::get('contact',[
	'as'=>'lienhe',
	'uses'=>'page_controller@getContact'
]);
Route::get('destination',[
	'as'=>'diemden',
	'uses'=>'page_controller@getDestination'
]);
Route::get('discount',[
	'as'=>'khuyenmai',
	'uses'=>'page_controller@getDiscount'
]);
Route::get('booking',[
	'as'=>'dattour',
	'uses'=>'page_controller@getBooking'
]);
Route::get('blog',[
	'as'=>'blog',
	'uses'=>'page_controller@getBlog'
]);

Route::get('chitiet',[
'as'=>'detail',
'uses'=>'page_controller@getDetail']);