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

Route::get('/', [App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('/');
Route::get('blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [App\Http\Controllers\Frontend\BlogController::class, 'single'])->name('blog.single');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'category' => App\Http\Controllers\Backend\CategoryController::class,
        'write_articles' => App\Http\Controllers\Backend\WriteArticlesController::class,
        'article' => App\Http\Controllers\Backend\ArticleController::class,
        'page' => App\Http\Controllers\Backend\PageController::class,
        'facility' => App\Http\Controllers\Backend\FacilityController::class,
        'gallery_categories' => App\Http\Controllers\Backend\GalleryCategoriesController::class,
        'gallery_images' => App\Http\Controllers\Backend\GalleryController::class,
        'profile' => App\Http\Controllers\Backend\ProfileController::class,
        'change_password' => App\Http\Controllers\Backend\ChangePasswordController::class,
    ]);
});
