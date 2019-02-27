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
})->name('index');


/*Route::get('/listdocu', function () {
    return view('listdocu');
});*/
Route::get('listdocu/{falta}/{cate}','BookController@listdocu')->name('listdocu');

Route::get('viewpdf/{book}','BookController@viewpdf')->name('viewpdf');

/*Route::get('/listdoc2', function () {
    return view('welcome');
});*/

Route::match(['get', 'post'], '/busqueda', 'SearchController@index')->name('buscar');

Auth::routes();

Route::Resource('book', 'BookController')->middleware('auth');

