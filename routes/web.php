<?php



Route::get('/', function () {
	return view('welcome');
});

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create_post', 'PostController@index');

// Route::get('/users', 'UserProfileController@lists');
// Route::get('/edit_user', 'UserProfileController@edit');


Route::get('/profile', 'UserProfileController@index');
Route::get('/profile/update', 'UserProfileController@update');
