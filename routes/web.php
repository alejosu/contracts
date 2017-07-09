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



Auth::routes();

Route::get('/home', 'ContractController@index')->name('allContracts');
Route::get('/home/{contract}', 'ContractController@show')->name('contractView');
Route::post('/home', 'ContractController@store');

Route::get('/customers', 'CustomerController@index')->name('allCustomers');
Route::get('/customers/{custs}', 'CustomerController@show')->name('customerView');
Route::post('/customers', 'CustomerController@store');




