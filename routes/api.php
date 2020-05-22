<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Animals;
use App\Http\Controllers\API\Owners;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/animals", [Animals::class, "index"]);


Route::group(["prefix" => "animals"], function () {
  
    Route::get("", [Animals::class, "index"]);
 
    Route::post("", [Animals::class, "store"]);

    Route::group(["prefix" => "{animal}"], function () {
       
        Route::get("", [Animals::class, "show"]);
        
        Route::put("", [Animals::class, "update"]);
        
        Route::delete("", [Animals::class, "destroy"]);
    });

    Route::get("/owners", [Owners::class, "index"]);


});


Route::group(["prefix" => "owners"], function () {
      
    Route::get("", [Owners::class, "index"])->middleware('auth:api');
    ;
 
    Route::post("", [Owners::class, "store"]);

    Route::group(["prefix" => "{owner}"], function () {
       
        Route::get("", [Owners::class, "show"]);
        
        Route::put("", [Owners::class, "update"]);
        
        Route::delete("", [Owners::class, "destroy"]);
    });     


});


// //owners/{owner_id}/animals
// Route:get('/{owner}/animals', 'API\Owner\Animals@show');
// Route:post('/{owner}/animals', 'API\Owner\Animals@store');

