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

Route::get('/', 'App\Http\Controllers\IndexController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function(){
    //Routs for admin
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('homeAdmin');

    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('group', \App\Http\Controllers\Admin\GroupController::class); //Class
    Route::resource('theme', \App\Http\Controllers\Admin\ThemeController::class);
});

Route::get('/subjects/{sub}/{class}','App\Http\Controllers\ThemeController@index' )->name('themes'); //Output themes on frontend



Route::get('/theme/{class}/{theme_id}/','App\Http\Controllers\CatalogController@index' )->name('catalog'); //Output posts on frontend
