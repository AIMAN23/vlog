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

Route::get('/lang/{lang}','LangController@index');

/*
Route::get('/getcookie','CookiesController@getCookie');
Route::get('/setcookie','CookiesController@setCookie');
*/
/*
 * Session tutorial
Route::get('/getsession','SessionController@getSession');
Route::get('/setsession','SessionController@setSession');
Route::get('/delsession','SessionController@deleteSession');
Route::get('/flash','SessionController@flashSession')->name('session.ok');
*/
/*
 * Redirect Tutorial
Route::get('/login','RedirectController@showLogin');
Route::post('/login','RedirectController@login');
Route::get('/loginok','RedirectController@ifLoginok')->name('login.ok');
*/
/*
Route::get('/about', 'PagesController@about');
Route::get('/get/{id}', 'PagesController@get');

Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');

Route::get('/get','ReqController@viewRequest');
Route::get('/login','ReqController@showLoginForm');
Route::post('/login','ReqController@login');
*/
/*
 * Controller Tutorial
Route::get('/laravel','TestController@index');
Route::get('id/{id}/{user}','TestController@show');

Route::resource('posts','ResController');
*/
/*Route::get('/laravel',function(){
    return 'laravel';
});

Route Tutorial
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

