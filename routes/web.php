<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageContRoller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [PageContRoller::class, 'index']);
// Route::get('about', [PageContRoller::class, 'about']);
// Route::get('welcome', [PageContRoller::class, 'welcome']);

// Route::get('users/{id}', [UserController::class, 'showUser']);
// Route::post('newsletter', [NewsletterController::class, 'store']);

Route::prefix('article')->group(function () {
    Route::get('', [ArticleController::class, 'index']);
    Route::get('create', [ArticleController::class, 'create']);
    Route::post('', [ArticleController::class, 'store']);
    Route::get('{id}/edit', [ArticleController::class, 'edit']);
    Route::get('{id}', [ArticleController::class, 'show']);
    Route::put('{id}', [ArticleController::class, 'update']);
    Route::delete('{id}', [ArticleController::class, 'destroy']);
});


