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

Route::get('/', "Home@index");

Route::get('/owners', "Owners@index");

Route::get('{owner}', "Owners@show");

Route::get('/animals', function () {
    return view('animals');
});

Route::get('create', "Owners@create");

Route::get('owners/create', "Owners@create");

Route::post('owners/create', "Owners@createPost");

Route::get('owners/{owner}/edit', "Owners@edit");

Route::post('owners/{owner}/edit', "Owners@editPost");

Route::get('/owners/{owner}', "Owners@show");

Route::get('form', "Owners@editOwner");









