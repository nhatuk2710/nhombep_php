<?php

use Illuminate\Support\Facades\Route;
Route::prefix("admin")->group (function (){
    include_once("admin/admin.php");
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
