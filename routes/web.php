<?php
# @Date:   2019-11-17T18:57:08+00:00
# @Last modified time: 2019-12-02T14:50:14+00:00




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');


Route::get('/admin/articles', 'Admin\ArticleController@index')->name('admin.articles.index');
Route::get('/admin/articles/create', 'Admin\ArticleController@create')->name('admin.articles.create');
Route::get('/admin/articles/{id}', 'Admin\ArticleController@show')->name('admin.articles.show');
Route::post('/admin/articles/store', 'Admin\ArticleController@store')->name('admin.articles.store');
Route::get('/admin/articles/{id}/edit', 'Admin\ArticleController@edit')->name('admin.articles.edit');
Route::put('/admin/articles/{id}', 'Admin\ArticleController@update')->name('admin.articles.update');
Route::delete('/admin/articles/{id}', 'Admin\ArticleController@destroy')->name('admin.articles.destroy');

Route::get('/user/articles', 'Admin\ArticleController@index')->name('user.articles.index');
Route::get('/user/articles/{id}', 'Admin\ArticleController@show')->name('admin.articles.show');
