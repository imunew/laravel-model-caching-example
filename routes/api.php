<?php

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

Route::middleware('guest:api')->group(function () {
    Route::prefix('albums')->namespace('Album')->group(function () {
        Route::get('/', 'Index');
        Route::prefix('{album}')->group(function () {
            Route::get('/', 'Show');
            Route::prefix('tracks')->namespace('Track')->group(function () {
                Route::get('/', 'Index');
            });
        });
    });
    Route::prefix('artists')->namespace('Artist')->group(function () {
        Route::get('/', 'Index');
        Route::prefix('{artist}')->group(function () {
            Route::get('/', 'Show');
            Route::prefix('tracks')->namespace('Track')->group(function () {
                Route::get('/', 'Index');
            });
        });
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
