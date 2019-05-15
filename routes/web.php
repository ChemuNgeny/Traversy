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



/*Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Nancy</h1>';
});*/

/*
Route::get('/users/{id}/{name}', function ($id, $name) {//dynamic pages
    return 'This is user '.$id.' '.'with the name' .' '.$name;
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');