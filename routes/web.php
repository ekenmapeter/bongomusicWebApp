<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BlogController;
use ProtoneMedia\Splade\Facades\Splade;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\DatingController;

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

Route::middleware('splade')->group(function () {
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', [HomePageController::class, 'index'])->name('home');
    Route::get('/blog/{slug}', [BlogController::class, 'singlePost'])->name('blog.single')->middleware('cache.headers:private;max_age=3600');

    Route::get('/blog', [BlogController::class, 'allPost'])->name('blog')->middleware('cache.headers:private;max_age=3600');

    Route::get('/explore', [ExploreController::class, 'show'])->name('explore');

    Route::get('/dating', [DatingController::class, 'show'])->name('dating')->middleware('cache.headers:private;max_age=3600');

    Route::get('/terms', [GeneralController::class, 'terms'])->name('terms')->middleware('cache.headers:private;max_age=3600');

    Route::get('/contact', [GeneralController::class, 'contact'])->name('contact')->middleware('cache.headers:private;max_age=3600');

    Route::get('/promotion', [GeneralController::class, 'promotion'])->name('promotion')->middleware('cache.headers:private;max_age=3600');

    Route::get('/about', [GeneralController::class, 'about'])->name('about')->middleware('cache.headers:private;max_age=3600');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



    require __DIR__.'/auth.php';
});
