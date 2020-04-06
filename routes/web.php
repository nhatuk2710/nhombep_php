<?php

use Illuminate\Support\Facades\Route;
Route::prefix("admin")->middleware("check_admin")->group (function (){
    include_once("admin.php");
});
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

//Route::get('/', function () {
//    return view('welcome');
//});


//home
Route::get('/',"WebController@home");
//list
Route::get('/list/{id}',"WebController@list")->middleware("auth");
//product
Route::get('/product/{id}','WebController@product');
// cart
Route::get('/shopping/{id}','WebController@shopping')->middleware("auth");
Route::get("/cart/",'WebController@cart')->middleware("auth");
Route::get("/clear-cart",'WebController@clearCart')->middleware("auth");
Route::get("/remove-cart/{id}",'WebController@removeCart')->middleware("auth");
// checkout
Route::get("checkout",'WebController@checkout')->middleware("auth");
Route::post("checkout",'WebController@placeOrder')->middleware("auth");
Route::get("checkout-success",'WebController@checkoutSuccess')->middleware("auth");
Route::get('checkoutReport','WebController@checkoutReport');
Route::post("postLogin","WebController@postLogin");

Auth::routes();

Route::get('/logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/login");
});

//Auth::routes();
//
//Route::get('/login', 'HomeController@index')->name('login');

//Auth::routes();
//
//Route::get('/register',function (){
//   return view('Register');
//});
