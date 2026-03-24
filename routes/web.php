<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminContentController;

Route::get('/', function () {
    return view('welcome');
});

// ✅ Admin Panel Routes
Route::prefix('admin')->group(function () {

    // Login
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Protected routes
    Route::middleware('admin.auth')->group(function () {

        // Dashboard & Notifications & Devices
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
        Route::post('/notifications/send', [AdminController::class, 'sendNotification'])->name('admin.notifications.send');
        Route::get('/devices', [AdminController::class, 'devices'])->name('admin.devices');

        // ✅ Content Pages
        Route::get('/trending', [AdminController::class, 'trending'])->name('admin.trending');
        Route::get('/popular', [AdminController::class, 'popular'])->name('admin.popular');
        Route::get('/trending-audiobooks', [AdminController::class, 'trendingAudiobooks'])->name('admin.trending.audiobooks');
        Route::get('/popular-audiobooks', [AdminController::class, 'popularAudiobooks'])->name('admin.popular.audiobooks');
        Route::get('/authors', [AdminController::class, 'authors'])->name('admin.authors');
        Route::get('/audiobook-authors', [AdminController::class, 'audiobookAuthors'])->name('admin.audiobook.authors');

        // ✅ CRUD Operations
        Route::post('/content/store', [AdminContentController::class, 'store'])->name('admin.content.store');
        Route::post('/content/update/{id}', [AdminContentController::class, 'update'])->name('admin.content.update');
        Route::post('/content/delete/{id}', [AdminContentController::class, 'delete'])->name('admin.content.delete');
        Route::post('/content/toggle/{id}', [AdminContentController::class, 'toggle'])->name('admin.content.toggle');
        Route::post('/content/reorder', [AdminContentController::class, 'reorder'])->name('admin.content.reorder');

        // ✅ Author CRUD
        Route::post('/authors/store', [AdminContentController::class, 'storeAuthor'])->name('admin.authors.store');
        Route::post('/authors/update/{id}', [AdminContentController::class, 'updateAuthor'])->name('admin.authors.update');
        Route::post('/authors/delete/{id}', [AdminContentController::class, 'deleteAuthor'])->name('admin.authors.delete');
        Route::post('/authors/toggle/{id}', [AdminContentController::class, 'toggleAuthor'])->name('admin.authors.toggle');
    });
});
