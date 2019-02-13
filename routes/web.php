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
    return view('index');
});


/*Route::get('/listdocu', function () {
    return view('listdocu');
});*/
Route::get('listdocu/{falta}/{cate}','BookController@listdocu')->name('listdocu');

Route::get('/viewpdf', function () {
    return view('viewpdf');
});

/*Route::get('/listdoc2', function () {
    return view('welcome');
});*/

Auth::routes();

Route::Resource('book', 'BookController')->middleware('auth');

