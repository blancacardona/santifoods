<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\RecipeController;
use App\Http\Controllers\API\BlogController;

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

Route::apiResource('category',CategoryController::class)->names('api.category');
Route::apiResource('recipe',RecipeController::class)->names('api.recipe');
Route::apiResource('blog',BlogController::class)->names('api.blog');
Route::delete('/eliminarimagen/{id}',[RecipeController::class,'eliminarimagen'])->name('api.eliminarimagen');
Route::delete('/eliminarimagen/{id}',[BlogController::class,'eliminarimagen'])->name('api.eliminarimagen');