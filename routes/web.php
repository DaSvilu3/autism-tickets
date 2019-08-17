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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ticket/new', 'NewTicket@index');
Route::post('/ticket/new', 'NewTicket@create');

Route::get('/ticket/list', 'NewTicket@list');
Route::post('/ticket/view', 'NewTicket@show');

Route::get('/mail', 'HomeController@sendM');
Route::get('mail/send', 'MailController@send');

Route::get('/document', 'DocumentController@index');


Route::get('/document/download', 'DocumentController@download');


Route::get('/session', 'TalkController@list');
