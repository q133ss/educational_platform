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

Route::middleware(['set_locale'])->group( function() {
    Route::get('/', 'App\Http\Controllers\IndexController@index');

    Route::get('/search', 'App\Http\Controllers\IndexController@search')->name('search');

    Route::get('/subjects/{sub}/{class}', 'App\Http\Controllers\ThemeController@index')->name('themes'); //Output themes on frontend
    Route::get('/subjects/{sub}/', 'App\Http\Controllers\ThemeController@category')->name('category'); //Output themes on frontend

    Route::get('/theme/{class}/{theme_id}/', 'App\Http\Controllers\CatalogController@index')->name('catalog'); //Output posts on frontend
    Route::get('/theme/{class}/{theme_id}/{video_id}', 'App\Http\Controllers\CatalogController@theme_video')->name('video'); //Separate video

//Lang routs
    Route::get('/lang/{lang}', 'App\Http\Controllers\IndexController@changeLocale')->name('changeLang');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function(){
    //Routs for admin
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('homeAdmin');

    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('group', \App\Http\Controllers\Admin\GroupController::class); //Class
    Route::resource('theme', \App\Http\Controllers\Admin\ThemeController::class);

    Route::get('/content/header', 'App\Http\Controllers\Admin\Content\HeaderController@header_index')->name('header_index');
    Route::post('/content/header/update', 'App\Http\Controllers\Admin\Content\HeaderController@header_update')->name('header_update');

    Route::get('/admin_panel/docs', function(){
        return view('admin.docs.index');
    })->name('docs');
});
