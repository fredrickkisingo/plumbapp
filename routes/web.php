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
<<<<<<< HEAD
Auth::routes();


=======

// Route::get('/', function () {
//     return view('welcome');
// });
>>>>>>> subsequent plumbapp changes
Route::get('/about',function(){
    return view('pages.about');
});

<<<<<<< HEAD
Route::resource('posts','PostsController');



Route::get('/dashboard', 'DashboardController@index');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin/dashboard',function(){
        return view('admin.dashboard');
    });
    //for the users profile
    Route::get('/role-register','Admin\DashboardController@register');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
   
    //for the posts profile
    Route::get('/artisanposts','Admin\DashboardController@artisanposts');
    Route::delete('/artisanpost-delete/{id}','Admin\DashboardController@artisanpostdelete');


    //abouts profile
    Route::get('/abouts', 'Admin\AboutusController@index');
    Route::post('/save-aboutus','Admin\AboutusController@store');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}','Admin\AboutusController@update');
    Route::delete('/delete-aboutus/{id}','Admin\AboutusController@delete');

    



});
=======
// Route::get('/users/{id}',function($id){
//     return 'This is user'.$id;
// });
>>>>>>> subsequent plumbapp changes
