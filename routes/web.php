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

Route::get('index', [
    'as'  => 'trangchu',
    'uses'=> 'page_controller@getIndex1'
  ]);

Route::get('about',[
	'as'=>'gioithieu',
	'uses'=>'page_controller@getAbout'
]);
Route::get('contact',[
	'as'=>'lienhe',
	'uses'=>'page_controller@getContact'
]);
Route::get('destination/{type}',[
	'as'=>'diemden',
	'uses'=>'page_controller@getDestination'
]);
Route::get('khuyenmai',[
'as'=>'khuyenmai1',
'uses'=>'page_controller@getPromotion'
]);
//book tour
Route::get('booking/{id}',[
	'as'=>'dattour1',
	'uses'=>'page_controller@getBooking'
]);
Route::post('booking/{id}',[				
	'as'=>'dattour',			
	'uses'=>'Page_controller@postBooking'			
	]);	






//blog
Route::get('blog',[
	'as'=>'blog',
	'uses'=>'page_controller@getBlog'
]);

Route::get('chitiet/{id_tour}',[
'as'=>'detail',
'uses'=>'page_controller@getDetail']);

Route::post('comment1',[	
'as'=>'comment',	
'uses'=>'Page_controller@postComment'	
]); 

//login
Route::get('dangnhap',[
'as'=>'login1',
'uses'=>'loginController@getLogin']);

Route::post('dangnhap',[
'as'=>'login',
'uses'=>'loginController@postLogin']);



Route::get('dangki',[
'as'=>'register',
'uses'=>'page_controller@getRegister']);

Route::post('addNguoidung',[
'as'=>'addUsers',
'uses'=>'page_controller@addUser']);

Route::get('indexAdmin',[
	'as'=>'admin.index',
	'uses'=>'page_controller@getIndexAdmin'
]);


//admin quản lí sản phẩm

//add place
Route::get('addPlace1','page_controller@getViewAddPlace');
Route::post('addPlace2',[
			'as'=>'themDiaDiem',
			'uses'=>'page_controller@addPlace']);

Route::get('in',[
	'as'=>'indexAdmin',
	'uses'=>'page_controller@getAdmin']);

Route::get('listPlace','page_controller@getListPlace');


//addTour
Route::get('addTour1','page_controller@getViewAddTour');
Route::post('addTour2',[
			'as'=>'themTour',
			'uses'=>'page_controller@addTour']);

//log out
Route::get('logout',[
'as'=>'logout1',	
'uses'=>'LoginController@postLogout'	
]);



//addJourney
Route::get('addJourney1','page_controller@getViewAddJourney');
Route::post('addJourney2',[
			'as'=>'themHanhTrinh',
			'uses'=>'page_controller@addJourney']);

//tour

Route::get('listTour',[
	'as'=>'hienthiTour','uses'=>'page_controller@getListTour']);


//delete usẻ
Route::get('xoaUser/{id}',[			
			'as'=>'deleteSpID',
			'uses'=>'page_controller@deleteUser']);

//delete cus
//delete usẻ
Route::get('xoaCus/{id}',[			
			'as'=>'deletecusID',
			'uses'=>'page_controller@deleteCus']);


Route::get('/search','searchController@search');

//list Users
Route::get('listUser',[
	'as'=>'listUser1','uses'=>'page_controller@getListUser']);

//xét quyền

Route::get('xetQuyenTruyCap/{id}',[
'as'=>'updateRole','uses'=>'page_controller@updateRole']);

Route::get('xetUser/{id}',[
'as'=>'updateUser','uses'=>'page_controller@updateUser']);


//Edit tour
Route::get('editTours/{id}', [
		'as' 	=> 'getEditTour',
		'uses' 	=> 'page_controller@getEditTours'
	]);
Route::post('editTours/{id}',[
		'as'=> 'saveEditTours',
		'uses'=>'page_controller@postEditTours']);

//ListJourney

Route::get('listJourney',[
	'as'=>'getListJourney',
'uses'=>'page_controller@getListJourney']);

Route::get('editJourney/{id}',[
'as'=>'getEditTour',
'uses'=>'page_controller@getEditJourney']);

Route::post('getEditJourney/{id}',[
		'as'=> 'saveEditJourney',
		'uses'=>'page_controller@postEditJourney']);

//Customer
Route::get('listCustomer',[
'as'=>'danhSachKhachHang',
'uses'=>'page_controller@getListCus']);

//xoa journey

Route::get('xoaJourney',[
'as'=>'xoaHanhTrinh',
'uses'=>'page_controller@deleteJouney']);

//list book tour
Route::get('listBookTour',[
'as'=>'listBookTour',
'uses'=>'page_controller@getListBookTour']);


Route::get('bills',[
'as'=>'billTour','uses'=>'page_controller@getBill']);

//ajax

Route::get('ajax', 'PageController@getAjax');
Route::post('search/name', 'Page_Controller@getSearchAjax')->name('search');

//xoa book tour

Route::get('xoaDetailBook/{id}',[			
			'as'=>'deletecusID',
			'uses'=>'page_controller@deleteBookTour']);

