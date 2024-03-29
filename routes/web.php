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





Route::get('/sms', 'SmsController@index')->name('smsPage');

Route::post('/sms', 'SmsController@store')->name('smsStore');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/threads', 'ThreadsController@index')->name('thread-index');
Route::get('/threads/{thread}', 'ThreadsController@show')->name('thread-show');
