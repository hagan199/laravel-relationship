<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StationController;

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

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::patch('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{company}/stations', [CompanyController::class, 'stations']);
Route::get('/company/{company}/numberofcompanies', [CompanyController::class, 'numberofcompanies']);
Route::get('/company/{company}/productsbelongtocompany', [CompanyController::class, 'productsbelongtocompany']);
Route::post('/company', [CompanyController::class, 'store']);
Route::patch('/company/{company}', [CompanyController::class, 'update']);
Route::delete('/company/{company}', [CompanyController::class, 'destroy']);

Route::get('/station', [StationController::class, 'index']);
Route::post('/station', [StationController::class, 'store']);
Route::patch('/station/{station}', [StationController::class, 'update']);
Route::delete('/station/{station}', [StationController::class, 'destroy']);

Route::get('/product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::patch('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

Route::get('/user}', [UserController::class, 'index']);
Route::get('/user/{user}/filter', [UserController::class, 'filter']);
Route::post('/user', [UserController::class, 'store']);
Route::patch('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'destroy']);

