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

Route::get('/animals', function () {
    return view('animals');
});

Route::get('owners/create', "Owners@create");

Route::post('create', "Owners@createPost");

Route::get('{owner}/edit', "Owners@edit");

Route::post('{owner}/edit', "Owners@editPost");


Route::get('{owner}', "Owners@show");


Route::get('form', "Owners@editOwner");

Route::get('/animals', function () {
    return view('animals');
});

// Route::get('/owners/edit/{id}', "Owners@edit");

// Route::post('/owners/edit/{edit}', "Owners@editPost");





