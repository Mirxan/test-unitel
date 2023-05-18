<?php

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

Route::namespace('Auth')
    ->controller(AuthController::class)
    ->group(function () {
        Route::post('login', 'login');
    }
);

Route::middleware(['auth:api'])->group(function () {
    
    Route::group(['namespace' => 'Api'],function(){
        
        Route::prefix('users')->controller(UserController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('all', 'allUsers');
        });
        Route::prefix('user')->controller(UserController::class)->group(function () {
            Route::get('{id}', 'show');
        });

        
        Route::prefix('products')->controller(ProductController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('all', 'allProducts');
        });
        Route::prefix('product')->controller(ProductController::class)->group(function () {
            Route::get('{id}', 'show');
        });
        
    });

});