<?php

Route::filter('permission', function($route, $request, $value){

	if (Auth::check()) {
		$haystack = array_slice(func_get_args(), 2);
		$needle	  = Auth::user()->level;
		if (!in_array($needle, $haystack)) {
			return redirect()->route('login');
		}
	} else {
		return redirect()->route('login');
	}
	
});

/* -------------------------------------------------------------------------------------- *
 * Client
 * -------------------------------------------------------------------------------------- */
Route::group(['prefix'=>'client', 'before'=>'permission:client'], function(){
	
	Route::get('/', ['uses'=>'HomeController@getHome', 'as'=>'pages.home']);
	Route::get('/home', ['uses'=>'HomeController@getHome', 'as'=>'pages.home']);
	Route::get('/advertising', ['uses'=>'AdvertisingController@getAdvertising', 'as'=>'pages.advertising']);
	Route::get('/visimisi', ['uses'=>'VisimisiController@getVisimisi', 'as'=>'pages.visimisi']);
	Route::get('/book', ['uses'=>'BookController@getBook', 'as'=>'pages.book']);
	Route::get('/consult', ['uses'=>'ConsultController@getConsult', 'as'=>'pages.consult']);
	Route::get('/training-info', ['uses'=>'TrainingController@getTrainingInfo', 'as'=>'pages.training-info']);
	Route::get('/training-register', ['uses'=>'TrainingController@getTrainingRegister', 'as'=>'pages.training-register']);
	Route::get('/contact', ['uses'=>'ContactController@getContact', 'as'=>'pages.contact', ]);
	/* Authentication */
	Route::post('/signin', ['uses'=>'AuthController@postSignin']);
	Route::get('/signup', ['uses'=>'AuthController@getSignup', 'as'=>'pages.signup']);
	Route::post('/signup', ['uses'=>'AuthController@postSignup']);

});

Route::group(['prefix'=>'client', 'before'=>'permission:member'], function(){
	
	Route::get('/', ['uses'=>'HomeController@getHome', 'as'=>'pages.home']);
	Route::get('/home', ['uses'=>'HomeController@getHome', 'as'=>'pages.home']);
	Route::get('/advertising', ['uses'=>'AdvertisingController@getAdvertising', 'as'=>'pages.advertising']);
	Route::get('/visimisi', ['uses'=>'VisimisiController@getVisimisi', 'as'=>'pages.visimisi']);
	Route::get('/book', ['uses'=>'BookController@getBook', 'as'=>'pages.book']);
	Route::get('/consult', ['uses'=>'ConsultController@getConsult', 'as'=>'pages.consult']);
	Route::get('/training-info', ['uses'=>'TrainingController@getTrainingInfo', 'as'=>'pages.training-info']);
	Route::get('/training-register', ['uses'=>'TrainingController@getTrainingRegister', 'as'=>'pages.training-register']);
	Route::get('/contact', ['uses'=>'ContactController@getContact', 'as'=>'pages.contact', ]);
	/* Authentication */
	Route::post('/signin', ['uses'=>'AuthController@postSignin']);
	Route::get('/signup', ['uses'=>'AuthController@getSignup', 'as'=>'pages.signup']);
	Route::post('/signup', ['uses'=>'AuthController@postSignup']);

});

/* -------------------------------------------------------------------------------------- *
 * Admin Control Panel
 * -------------------------------------------------------------------------------------- */
Route::group(['prefix'=>'admin', 'before'=>'permission:root'], function(){

	/* Authentication */
	Route::get('/signin', ['uses'=>'AuthController@getSignin', 'as'=>'admin.auth.signin']);
	Route::post('/signin', ['uses'=>'AuthController@postSignin']);
	/* Pages */
	Route::get('/', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/dashboard', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/create-news', ['uses'=>'NewsController@getCreateNews', 'as'=>'admin.pages.create-news']);
	Route::get('/news-list', ['uses'=> 'NewsController@getCreateNews', 'as'=>'admin.pages.news-list']);
	Route::post('/create-news', ['uses'=>'NewsController@postCreateNews']);
	
});

Route::group(['prefix'=>'admin', 'before'=>'permission:admin'], function(){

	/* Authentication */
	Route::get('/signin', ['uses'=>'AuthController@getSignin', 'as'=>'admin.auth.signin']);
	Route::post('/signin', ['uses'=>'AuthController@postSignin']);
	/* Pages */
	Route::get('/', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/dashboard', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/create-news', ['uses'=>'NewsController@getCreateNews', 'as'=>'admin.pages.create-news']);
	Route::get('/news-list', ['uses'=> 'NewsController@getCreateNews', 'as'=>'admin.pages.news-list']);
	Route::post('/create-news', ['uses'=>'NewsController@postCreateNews']);
	/*
	Route::get('/add-user', ['uses'=> 'UserController@getAddUser', 'as'=>'admin.pages.add-user']);
	Route::post('/add-user', ['uses'=>'UserController@postAddUser']);
	*/
});

Route::group(['prefix'=>'admin', 'before'=>'permission:writer'], function(){
	
	/* Authentication */
	Route::get('/signin', ['uses'=>'AuthController@getSignin', 'as'=>'admin.auth.signin']);
	Route::post('/signin', ['uses'=>'AuthController@postSignin']);
	/* Pages */
	Route::get('/', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/dashboard', ['uses'=>'DashboardController@getDashboard', 'as'=>'admin.pages.dashboard']);
	Route::get('/create-news', ['uses'=>'NewsController@getCreateNews', 'as'=>'admin.pages.create-news']);
	Route::get('/news-list', ['uses'=> 'NewsController@getCreateNews', 'as'=>'admin.pages.news-list']);
	Route::post('/create-news', ['uses'=>'NewsController@postCreateNews']);
	
});