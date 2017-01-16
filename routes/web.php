<?php











Route::get('/',  array('as' => 'session.login', 'uses' => 'SessionController@create'));
Route::post('login',  array('as' => 'session.store', 'uses' => 'SessionController@store'));
Route::get('logout',  array('as' => 'session.logout', 'uses' => 'SessionController@destroy'));

Route::get('users/create',  array('as' => 'users.create', 'uses' => 'UserController@create'));
Route::post('users/store',  array('as' => 'users.store', 'uses' => 'UserController@store'));

Route::post('ajax/show',  array('as' => 'ajax.show', 'uses' => 'UserController@ajaxShow'));

Route::group(['middleware' => 'auth'], function () {
	Route::get('panel', array('as' => 'panel.index', 'uses' => 'PanelController@index'));
	Route::get('panel/user/create', array('as' => 'panel.create', 'uses' => 'UserController@create'));
	Route::get('panel/userstore', array('as' => 'panel.guardar2', 'uses' => 'UserController@guardar2'));


	Route::resource('app/accounts', "AppusersController");
	Route::resource('devices',   "DevicesController");
});
