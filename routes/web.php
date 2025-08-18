<?php

use Illuminate\Routing\RouteGroup;
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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});




Route::group([
    'prefix'=>'admin',
    'middleware'=>['auth'], 
    'namespace'=>'Admin' 
],function(){
Route::get('/','AdminController@index')->name('admin_index');
// basic page
Route::get('/index','AdminController@blade_index')->name('admin_blade_index');
Route::get('/create','AdminController@blade_create')->name('admin_blade_create');
Route::get('/view','AdminController@blade_view')->name('admin_blade_view');
});

// User Management
Route::group([
    'prefix'=>'user',
    'middleware'=>['auth'], 
    'namespace'=>'Admin' 
],function(){
Route::get('/index','UserController@index')->name('admin_user_index');
Route::get('/view/{id}','UserController@view')->name('admin_user_view');
Route::get('/create','UserController@create')->name('admin_user_create');
Route::post('/store','UserController@store')->name('admin_user_store');
Route::get('/edit','UserController@edit')->name('admin_user_edit');
Route::post('/update','UserController@update')->name('admin_user_update');
Route::post('/delete','UserController@delete')->name('admin_user_delete');
});
    