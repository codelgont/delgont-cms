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
Route::get('/', 'HomeController@index')->name('web.home');

Route::get(config('web.events.route_prefix', 'upcoming-events'), 'EventController@index')->name('web.events');
Route::get(config('web.events.route_prefix', 'upcoming-events').'/{slug}', 'EventController@show')->name('web.events.show');

Route::get('{slug}', 'WebController@view')->where('slug', '([A-Za-z0-9\-\/]+)')->name('web.page');


