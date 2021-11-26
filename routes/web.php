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
Route::get('/users/settings', 'UsersController@settings')->middleware(CheckSignin::class);
Route::post('/users/signincheck', 'UsersController@signinCheck');
Route::post('/users/save', 'UsersController@save')->middleware(CheckSignin::class);;
Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);
Route::get('/users/logout', 'UsersController@logout');
Route::get('/product/{id}', 'ProductsController@getById');
Route::post('/search', 'ProductsController@getBySearch');
Route::get('/cart/view', 'CartController@viewAllItemsByUserId')->middleware(CheckSignin::class);
Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(ChecksigninAjax::class);
Route::post('/cart/delete/{id}', 'CartController@deleteItemById')->middleware(ChecksigninAjax::class);
Route::post('/cart/getCountItems', 'CartController@getCountItemsByUserId')->middleware(ChecksigninAjax::class);
Route::post('/cart/getPriceItems', 'CartController@getPriceItemsByUserId')->middleware(ChecksigninAjax::class);
Route::post('/purchases/make', 'PurchasesController@makePurchase')->middleware(ChecksigninAjax::class);
Route::get('/purchases/get', 'PurchasesController@getByUserId')->middleware(Checksignin::class);

//Route::get('/', function () {
//    return view('template');
//});
