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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('welcome');
//Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts/create', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::post('/posts/update', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::post('/posts/addtag', 'App\Http\Controllers\PostController@addtag')->name('posts.addtag');
Route::delete('/deletepost/{id}', 'App\Http\Controllers\PostController@delete')->name('posts.delete');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->whereNumber('id')->name('posts.show'); // Pour tester le type de paramètre url renseigné
Route::get('/contact', 'App\Http\Controllers\PostController@contact')->name('contact');