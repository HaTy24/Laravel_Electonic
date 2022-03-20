<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/product', [IndexController::class, 'product']);

Route::get('/store', [IndexController::class, 'store']);
Route::get('/checkout', [IndexController::class, 'checkout']);

Route::post('/push', [IndexController::class, 'push']);
Route::get("/post", [PostController::class, 'post']);

Route::get('/delete', [IndexController::class, 'delete']);
