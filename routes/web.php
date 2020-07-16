<?php

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


Route::get('/food','FoodController@showAll');
Route::get('/food/{fid}','FoodController@showOne');
Route::post('/food','FoodController@insert');
Route::patch('/food/{food_id}','FoodController@edit');
Route::delete('/food/{food_id}','FoodController@deleteFood');


Route::get('/Orders','OrdersController@showAll');
Route::get('/Orders/{order_id}','OrdersController@showOne');
Route::post('/Orders','OrdersController@insert');
Route::patch('/Orders/{order_id}','OrdersController@edit');
Route::delete('Orders/{order_id}','OrdersController@destroy');


Route::get('/Users','UserController@showAll');
Route::get('/Users/{user_id}','UserController@showOne');
Route::post('/Users','UserController@insert');
Route::patch('/Users/{user_id}','UserController@edit');
Route::delete('/Users/{user_id}','UserController@destroy');
