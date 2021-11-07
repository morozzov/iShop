<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;

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

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');
Route::get('/', 'PagesController@home');
Route::get('/users/signin', 'UsersController@signin');
Route::post('/users/signincheck', 'UsersController@signinCheck');
Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);
Route::get('/users/logout', 'UsersController@logout');

Route::get('/cart/view/{id}', 'CartController@viewAllItemsByUserId');

//Route::get('/', function () {
//    return view('template');
//});
