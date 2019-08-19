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

// Route::get('/home', 'HomeController@index')->name('home');
$locale = App::getLocale();
Route::get('/{lang?}', 'LandingController@index', function($locale)  {
    App::setLocale($locale);
});
Route::post('/commit', 'LandingController@store');
Route::get('/news/{id}', 'LandingController@show');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
