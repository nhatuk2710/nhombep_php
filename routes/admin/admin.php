<?php


use Illuminate\Support\Facades\Route;
//admin
Route::get('category/',"AdminController@admin");


//luu danh muc san pham
Route::get('category/created',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");
//luu thuong hieu san pham
Route::get('category/brandcreate',"AdminController@brandStore");
Route::post('category/brandstore',"AdminController@categoryBrand");
//luu san pham
Route::get('category/productcreate',"AdminController@products");
Route::post('category/productstore',"AdminController@productStore");
//Sua Danh muc
Route::get('category/edit/{id}',"AdminController@categoryEdit");
Route::post('category/update/{id}',"AdminController@categoryUpdate");
// Sua thuong hieu
Route::get('category/editBrand/{id}',"AdminController@brandEdit");
Route::post('category/brandupdate/{id}',"AdminController@brandUpdate");
// Sua san pham
Route::get('category/productEdit/{id}',"AdminController@productEdit");
Route::post('category/productUpdate/{id}',"AdminController@productUpdate");
//xoa danh muc
Route::get('category/cateDelete/{id}',"AdminController@cateDelete");
Route::get('category/cateDeleteUp/{id}',"AdminController@cateDeleteUp");
Route::post('category/cateDestroy/{id}',"AdminController@cateDestroy");
//xoa thuong hieu
Route::get('category/brandDeleteUp/{id}',"AdminController@brandDeleteUp");
//xoa san pham
Route::get('category/productDeleteUp/{id}',"AdminController@productDeleteUp");


