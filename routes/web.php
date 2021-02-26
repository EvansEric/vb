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


Auth::routes();


//Home
Route::get('/', 'HomeController@index')->name('home');
// Terms of Use
Route::get('/terms-of-use', 'HomeController@termsOfUse')->name('terms-of-use');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');


//Profile
Route::get('user/profile', 'ProfileController@profile')->name('profile');
Route::get('user/edit_profile', 'ProfileController@editProfile')->name('edit_profile');
Route::post('user/edit_profile', 'ProfileController@updateProfile')->name('edit_profile');
Route::post('/user/update_avatar', 'ProfileController@updateAvatar')->name('update_avatar');


//Logout
Route::get('logout', 'Auth\LoginController@logout');
