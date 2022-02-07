<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dishController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ingredientController;
use App\Http\Controllers\dishIngredientController;


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
Route::post('/dish',[dishController::class,'store']);
Route::post('/category',[categoryController::class,'store']);
Route::post('/ingredient',[ingredientController::class,'store']);
Route::post('/dish_ingredient',[dishIngredientController::class,'store']);
Route::post('/dish/{id}',[DishController::class,'destroy']); 
Route::post('/category/{id}',[categoryController::class,'destroy']); 
Route::post('/ingredient/{id}',[ingredientController::class,'destroy']); 