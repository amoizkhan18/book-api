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
use App\Http\Controllers\TrendingAudiobookController;
use App\Http\Controllers\PopularAudiobookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AudiobookAuthorController;


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

// Trending Audiobooks Routes
Route::get('/trending-audiobooks/{id?}', [TrendingAudiobookController::class, 'show']);
Route::post('/trending-audiobooks/store', [TrendingAudiobookController::class, 'store']);
Route::post('/trending-audiobooks/update/{id}', [TrendingAudiobookController::class, 'update']);
Route::post('/trending-audiobooks/delete/{id}', [TrendingAudiobookController::class, 'destroy']);
Route::post('/trending-audiobooks/toggle/{id}', [TrendingAudiobookController::class, 'toggleActive']);
Route::post('/trending-audiobooks/reorder', [TrendingAudiobookController::class, 'updateOrder']);

// Popular Audiobooks Routes
Route::get('/popular-audiobooks/{id?}', [PopularAudiobookController::class, 'show']);
Route::post('/popular-audiobooks/store', [PopularAudiobookController::class, 'store']);
Route::post('/popular-audiobooks/update/{id}', [PopularAudiobookController::class, 'update']);
Route::post('/popular-audiobooks/delete/{id}', [PopularAudiobookController::class, 'destroy']);
Route::post('/popular-audiobooks/toggle/{id}', [PopularAudiobookController::class, 'toggleActive']);
Route::post('/popular-audiobooks/reorder', [PopularAudiobookController::class, 'updateOrder']);

// Author Routes - Add these with your existing routes
Route::get('/authors/top', [AuthorController::class, 'topAuthors']);
Route::get('/authors/{name}/books', [AuthorController::class, 'getBooksByAuthor']);
Route::get('/authors/{id?}', [AuthorController::class, 'index']);

// Admin routes for managing authors
Route::post('/authors/store', [AuthorController::class, 'store']);
Route::post('/authors/update/{id}', [AuthorController::class, 'update']);
Route::post('/authors/delete/{id}', [AuthorController::class, 'destroy']);
Route::post('/authors/toggle/{id}', [AuthorController::class, 'toggleActive']);
Route::post('/authors/reorder', [AuthorController::class, 'updateOrder']);

// Audiobook Author Routes - Add these with your existing routes
Route::get('/audiobook-authors/top', [AudiobookAuthorController::class, 'topAuthors']);
Route::get('/audiobook-authors/{name}/audiobooks', [AudiobookAuthorController::class, 'getAudiobooksByAuthor']);
Route::get('/audiobook-authors/{id?}', [AudiobookAuthorController::class, 'index']);

// Admin routes for managing audiobook authors
Route::post('/audiobook-authors/store', [AudiobookAuthorController::class, 'store']);
Route::post('/audiobook-authors/update/{id}', [AudiobookAuthorController::class, 'update']);
Route::post('/audiobook-authors/delete/{id}', [AudiobookAuthorController::class, 'destroy']);
Route::post('/audiobook-authors/toggle/{id}', [AudiobookAuthorController::class, 'toggleActive']);
Route::post('/audiobook-authors/reorder', [AudiobookAuthorController::class, 'updateOrder']);
