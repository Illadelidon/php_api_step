<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * /api/categories
 * */
Route::get('/categories', [CategoryController::class, 'getList']);
Route::get('/categories/{id}', [CategoryController::class, 'getById']);
Route::post('/categories/create', [CategoryController::class, 'create']);
Route::delete("/categories/{id}", [CategoryController::class, "delete"]);
Route::post("/categories/edit/{id}", [CategoryController::class, "edit"]);

Route::get('/products', [ProductController::class, 'getList']);
Route::post('/product', [ProductController::class, 'store']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
