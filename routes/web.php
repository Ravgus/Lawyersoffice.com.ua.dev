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

Route::get('/', ['uses' => 'PagesController@main', 'as' => 'main']);
Route::get('/offers', ['uses' => 'PagesController@offers', 'as' => 'offers']);
Route::get('/dtps', ['uses' => 'PagesController@dtps', 'as' => 'dtps']);
Route::get('/faqs', ['uses' => 'PagesController@faqs', 'as' => 'faqs']);
Route::get('/partners', ['uses' => 'PagesController@partners', 'as' => 'partners']);
Route::get('/contacts', ['uses' => 'PagesController@contacts', 'as' => 'contacts']);
Route::get('/news', ['uses' => 'PagesController@news', 'as' => 'news']);
Route::get('/news/{alias}', ['uses' => 'PagesController@article', 'as' => 'article']);

Auth::routes();

Route::match(['post', 'get'], 'register', function (){
    /*Auth::logout();
    return redirect('/');*/
    abort(404);
})->name('register');

