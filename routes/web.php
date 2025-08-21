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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
Route::get('/index','UserRoleController@index')->name('admin_user_index');
Route::get('/view/{id}','UserRoleController@view')->name('admin_user_view');
Route::get('/create','UserRoleController@create')->name('admin_user_create');
Route::post('/store','UserRoleController@store')->name('admin_user_store');
Route::get('/edit','UserRoleController@edit')->name('admin_user_edit');
Route::post('/update','UserRoleController@update')->name('admin_user_update');
Route::post('/delete','UserRoleController@delete')->name('admin_user_delete');
});
    

// User role Management
Route::group([
    'prefix'=>'user-role',
    'middleware'=>['auth'], 
    'namespace'=>'Admin' 
],function(){
Route::get('/index','UserRoleController@index')->name('admin_user_role_index');
Route::get('/view/{id}','UserRoleController@view')->name('admin_user_role_view');
Route::get('/create','UserRoleController@create')->name('admin_user_role_create');
Route::post('/store','UserRoleController@store')->name('admin_user_role_store');
Route::get('/edit','UserRoleController@edit')->name('admin_user_role_edit');
Route::post('/update','UserRoleController@update')->name('admin_user_role_update');
Route::post('/delete','UserRoleController@delete')->name('admin_user_role_delete');
});