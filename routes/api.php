<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AudioBookController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\NewBookController;
use App\Http\Controllers\HardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrendingBookController;
use App\Http\Controllers\PopularBookController;

// Existing routes
Route::get('/audiobook/{id?}', [AudioBookController::class, 'getAudiobook']);

Route::get('/hardlinks/{id?}', [HardController::class, 'show']);

Route::get('/newbooks/search/{search?}', [BookController::class, 'searchBooks']);
Route::get('/audiobooks/{bookid?}', [NewBookController::class, 'newshow']);
Route::get('/audiobooks/genres/{genres?}', [AudiobookController::class, 'audiobooksByGenre']);
Route::get('/audiobooks/search/{name?}', [NewBookController::class, 'searchByName']);

Route::get('/newbooks/{id?}', [BookController::class, 'show']);
Route::get('/newbooks/genres/{genres?}', [BookController::class, 'showgenres']);
Route::get('/newbooks/search/{name?}', [NewBookController::class, 'searchByName']);

Route::post('/favorite', [FavoriteController::class, 'saveFavorite']);
Route::get('/favorites', [FavoriteController::class, 'getFavorites']);

Route::get('/search', [SearchController::class, 'search']);

// Trending Books Routes
Route::get('/trending/{id?}', [TrendingBookController::class, 'show']);
Route::post('/trending/store', [TrendingBookController::class, 'store']);
Route::post('/trending/update/{id}', [TrendingBookController::class, 'update']);
Route::post('/trending/delete/{id}', [TrendingBookController::class, 'destroy']);
Route::post('/trending/toggle/{id}', [TrendingBookController::class, 'toggleActive']);
Route::post('/trending/reorder', [TrendingBookController::class, 'updateOrder']);

// Popular Books Routes
Route::get('/popular/{id?}', [PopularBookController::class, 'show']);
Route::post('/popular/store', [PopularBookController::class, 'store']);
Route::post('/popular/update/{id}', [PopularBookController::class, 'update']);
Route::post('/popular/delete/{id}', [PopularBookController::class, 'destroy']);
Route::post('/popular/toggle/{id}', [PopularBookController::class, 'toggleActive']);
Route::post('/popular/reorder', [PopularBookController::class, 'updateOrder']);
