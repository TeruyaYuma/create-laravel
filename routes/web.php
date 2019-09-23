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
// userInfomation
Route::get('/infos/new', 'infosTableController@new')->name('infos.new');
Route::post('/infos', 'infosTableController@create')->name('infos.create');

Route::get('/infos/show', 'infosTableController@show')->name('infos.show'); 

Route::get('/infos/{id}/edit', 'infosTableController@edit')->name('infos.edit');
Route::post('/infos/{id}', 'infosTableController@update')->name('infos.update');

Route::post('/infos/{id}/delete', 'infosTableController@delete')->name('infos.delete');

//bookingSystem
Route::get('/booking', 'bookingTableController@index')->name('booking.index');
Route::get('/booking/new', 'bookingTableController@new')->name('booking.new');
Route::post('/booking/create', 'bookingTableController@create')->name('booking.create');

Route::get('/booking/show', 'bookingTableController@show')->name('booking.show');
Route::get('/booking/{id}/sort', 'bookingTableController@sort')->name('booking.sort');
Route::get('/booking/{id}/detail', 'bookingTableController@detail')->name('booking.detail');
Route::post('/booking/{id}/delete', 'bookingTableController@delete')->name('booking.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
