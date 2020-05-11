<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'homepgController@home' );

Route::get('/library', 'frontController@index' );
Route::get('/labs', 'frontController@labs' );
Route::get('/departments', 'frontController@departments' );
Route::get('/students', 'frontController@students' );
Route::get('/important-links', 'frontController@links' );


Route::get('/admin/{user}', 'adminController@index' )->name('admin.show')->middleware('authenticated');
Route::get('/admin/profile/{user}', 'adminController@profile' )->name('admin.profile.show')->middleware('authenticated');;

Route::get('/admin/home/{user}', 'adminController@home' );
Route::get('/admin/lib/{user}', 'adminController@lib' );
Route::get('/admin/labs/{user}', 'adminController@labs' );
Route::get('/admin/dept/{user}', 'adminController@departments' );
Route::get('/admin/student/{user}', 'adminController@students' );
Route::get('/admin/documentation/{user}', 'adminController@documentation' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
