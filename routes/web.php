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

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['role:admin,edit articles']], function () {
    //
      Route::resource('admin','AdminController');
      Route::resource('writer','WriterController');


});
Route::group(['middleware' => ['role:writer,edit articles']], function () {
    //
      Route::resource('writer','WriterController');


});
// Route::get('admin',function(){
//
//     return view('admin');
//
//
// });
