<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', App\Http\Controllers\Frontend\Compro\HomepageController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'category' => App\Http\Controllers\Backend\CategoryController::class,
        'articles_blog' => App\Http\Controllers\Backend\ArticlesBlogController::class,
        'articles_news' => App\Http\Controllers\Backend\ArticlesNewsController::class,
    ]);
});
