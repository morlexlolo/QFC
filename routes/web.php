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

Auth::routes();
//HOME
Route::get('/home', 'HomeController@index')->name('home');


//CONTACT US
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/send', 'ContactController@store')->name('contact.store');

//SERVICES
Route::get('/services', 'ServiceController@index')->name('services.index');

Route::get('/services/{service}', 'ServiceController@show')->name('services.show');


//ABOUT
Route::get('/about', 'AboutController@index')->name('about');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
