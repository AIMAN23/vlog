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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/get/{id}', 'PagesController@get');

Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
/*
Route::get('/laravel','TestController@index');

Route::get('id/{id}/{user}','TestController@show');

Route::resource('posts','ResController');
*/
/*Route::get('/laravel',function(){
    return 'laravel';
});


Route::get('id/{id}/{user?}',function($id,$user = 'null'){
   return 'Id : '.$id . 'User : '.$user;
})->where('id','[0-9]+')->name('testid');

Route::prefix('user')->group(function(){
    Route::get('/laravel',function(){
        return 'laravel';
    })->name('laravel');
    Route::get('/osama',function(){
        return 'osama';
    })->name('osama');
    Route::get('/iqtech',function(){
        return 'iqtech';
    })->name('iqtech');
});*/

