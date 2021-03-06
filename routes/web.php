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
Route::get('/list/{id}',"WebController@list");
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
//login popup


Auth::routes();

Route::get('/logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/login");
});

Route::post("postLogin","WebController@postLogin");
Route::post("postSignup","WebController@postSignup");
Route::get("logOut",'WebController@logOut');
