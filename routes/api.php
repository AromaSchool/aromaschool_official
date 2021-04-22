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
    Route::prefix('categories')->group(function () {
        Route::get('/', Teacher\GetTeacherCategories::class);
    });
    Route::get('/', Teacher\GetTeachersController::class);
});

Route::prefix('news')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', News\GetNewsCategoriesController::class);
    });
    Route::get('/', News\GetNewsListController::class);
    Route::get('/{id}', News\GetNewsController::class)->where('id', '[0-9]+');
});

Route::prefix('articles')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', Article\GetArticleCategoriesController::class);
    });
    Route::get('/', Article\GetArticlesController::class);
    Route::get('/{id}', Article\GetArticleController::class)->where('id', '[0-9]+');
    Route::put('/{id}/hit', Article\UpdateArticleHitsController::class)->where('id', '[0-9]+');
});

Route::prefix('mail')->group(function () {
    Route::post('/contact', Mail\ContactMeController::class);
});

Route::prefix('optimize')->group(function () {
    Route::post('/', Optimize\OptimizeController::class);
});
