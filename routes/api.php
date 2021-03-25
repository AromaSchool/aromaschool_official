<?php

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

Route::get('ping', PingController::class);

Route::prefix('events')->group(function () {
    Route::get('/', Event\GetEventsController::class);
    Route::get('/{id}', Event\GetEventController::class)->where('id', '[0-9]+');
});

Route::prefix('reviews')->group(function () {
    Route::get('/', Review\GetReviewsController::class);
});

Route::prefix('teachers')->group(function () {
    Route::get('/', Teacher\GetTeachersController::class);
});
