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
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Auth::routes();


Route::get('/about',function(){
    return view('pages.about');
});

Route::resource('posts','PostsController');



Route::get('/dashboard', 'DashboardController@index');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@register');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
   
    Route::get('/abouts', 'Admin\AboutusController@index');
    Route::post('/save-aboutus','Admin\AboutusController@store');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}','Admin\AboutusController@update');
    Route::delete('/delete-aboutus/{id}','Admin\AboutusController@delete');

    



});