<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;

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

Route::group([
    'prefix' => 'test'
], function ($route) {
    $route->get('/list', [TestController::class, 'index']);
    $route->post('/create', [TestController::class, 'store']);
});

Route::group([
    'prefix' => 'category'
], function ($route) {
    $route->get('/list', [CategoryController::class, 'index']);
    $route->post('/create', [CategoryController::class, 'store']);
});
