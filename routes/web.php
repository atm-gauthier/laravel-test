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

Route::get('/articles', 'App\Http\Controllers\PostController@index');
//Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->whereNumber('id'); // Pour tester le type de paramètre url renseigné
Route::get('/contact', 'App\Http\Controllers\PostController@contact');
