<?php

use App\Models\Post;
use App\Http\Controllers\PostsApiController;
use App\Models\Company;
use App\Http\Controllers\CompanyApiController;
use App\Models\Product;
use App\Http\Controllers\ProductApiController;
use App\Models\User;
use App\Http\Controllers\UserApiController;
use App\Models\Station;
use App\Http\Controllers\StationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', [PostsApiController::class, 'index']);
Route::post('/posts', [PostsApiController::class, 'store']);
Route::put('/posts/{post}', [PostsApiController::class, 'update']);
Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);

Route::get('/company', [CompanyApiController::class, 'index']);
Route::post('/company', [CompanyApiController::class, 'store']);
Route::put('/company/{company}', [CompanyApiController::class, 'update']);
Route::delete('/company/{company}', [CompanyApiController::class, 'destroy']);

Route::get('/station', [StationApiController::class, 'index']);
Route::post('/station', [StationApiController::class, 'store']);
Route::put('/station/{station}', [StationApiController::class, 'update']);
Route::delete('/station/{station}', [StationApiController::class, 'destroy']);

Route::get('/product', [ProductApiController::class, 'index']);
Route::post('/product', [ProductApiController::class, 'store']);
Route::put('/product/{product}', [ProductApiController::class, 'update']);
Route::delete('/product/{product}', [ProductApiController::class, 'destroy']);

Route::get('/user', [UserApiController::class, 'index']);
Route::post('/user', [UserApiController::class, 'store']);
Route::put('/user/{user}', [UserApiController::class, 'update']);
Route::delete('/user/{user}', [UserApiController::class, 'destroy']);

