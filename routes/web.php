<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;
use App\Http\Middleware\ChecksigninAjax;

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
Route::get('/product/{id}', 'ProductsController@getById');
Route::get('/cart/view', 'CartController@viewAllItemsByUserId')->middleware(CheckSignin::class);
Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(ChecksigninAjax::class);


//Route::get('/', function () {
//    return view('template');
//});
