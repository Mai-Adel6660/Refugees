<?php
Route::group(['prefix'=>'admin'], function () { //fetch all controllers with namespace => Admin

	Config::set('auth.defines','admin'); //('file auth in config', 'val')
	Route::get('login', 'AdminAuthCtrl@login');
	Route::post('login', 'AdminAuthCtrl@dologin');
	Route::get('forgot/password','AdminAuthCtrl@forgot_password');
	Route::post('forgot/password','AdminAuthCtrl@forgot_password_post');
	Route::get('reset/password/{token}', 'AdminAuthCtrl@reset_password');
	Route::post('reset/password/{token}', 'AdminAuthCtrl@reset_password_final');



	Route::group(['middleware'=>'admin:admin'], function () {  //'guard:value'
		//Admin
		Route::group(['prefix'=>'ad'], function(){
			Route::get('/index', 'AdminTestController@index');
			Route::get('/add', 'AdminTestController@create');
			Route::post('/store', 'AdminTestController@store');
			Route::get('/edit/{id}', 'AdminTestController@edit');
			Route::put('/update', 'AdminTestController@update');
			Route::get('/delete/{id}', 'AdminTestController@destroy');
			//Route::get('/show', 'AdminTestController@show');


		});
		//Users
		Route::group(['prefix'=>'user'], function(){
			Route::get('/index', 'UserController@index');
			Route::get('/add', 'UserController@create');
			Route::post('/store', 'UserController@store');
			Route::get('/edit/{id}', 'UserController@edit');
			Route::put('/update', 'UserController@update');
			Route::get('/delete/{id}', 'UserController@destroy');

		});
		//Apartment
		Route::group(['prefix'=>'apart'], function(){
			Route::get('/index', 'ApartmentController@index');
			Route::get('/add', 'ApartmentController@create');
			Route::post('/store', 'ApartmentController@store');
			Route::get('/edit/{id}', 'ApartmentController@edit');
			Route::put('/update/{apartment}', 'ApartmentController@update');
			Route::get('/delete/{id}', 'ApartmentController@destroy');
		});
		//settings
		Route::group(['prefix'=>'settings'], function(){
			Route::get('/setting', 'SettingController@index');
			Route::post('/store', 'SettingController@store');
		});
		//Job
		Route::group(['prefix'=>'job'], function(){
			Route::get('/index', 'jobsController@index');
			Route::get('/add', 'jobsController@create');
			Route::post('/store', 'jobsController@store');
			Route::get('/edit/{id}', 'jobsController@edit');
			Route::put('/update', 'jobsController@update');
			Route::get('/delete/{id}', 'jobsController@destroy');
		});
		//Donors
		Route::group(['prefix'=>'donors'], function(){
			Route::get('/index', 'DonorsController@index');
			
			Route::get('/delete/{id}', 'DonorsController@destroy');
		});

		

		



		//inside authenticate//
		Route::get('/', function(){
			return view('admin.home');
		});

		Route::any('logout', 'AdminAuthCtrl@logout');
	});
	
});


////////////// Front ///
Route::view('/home','style.home');
Route::view('/about','style.about');

Route::view('/services','style.services');
Route::get('/services/jobs','SiteCtrl@jobs');
Route::get('/services/apartments', 'SiteCtrl@apartments');

Route::view('/donation','style.donation');

Route::view('/community','style.community');




Route::get('/login', 'SiteCtrl@login');
Route::any('/register', 'SiteCtrl@register');

Route::any('/logout', 'SiteCtrl@logout');



//Route::get('/services/jobs/','SiteCtrl@show');

// Route::get('login', 'UserAuthCtrl@login');
// Route::post('login', 'UserAuthCtrl@dologin');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/{social}', 'SiteCtrl@socialLogin')
		->where('social','twitter|facebook|google');

Route::get('/login/{social}/callback', 'SiteCtrl@handleProvderCallBack')
		->where('social','twitter|facebook|google');




///////////////////////

//fisrt way to insert many records by using factories
//factory(App\Jobs::class , 4)->create();