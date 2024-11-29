<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('artists', [ArtistController::class, 'index']);
Route::get('artists/create', [ArtistController::class, 'create']);
Route::post('artists', [ArtistController::class, 'store']);
Route::get('artists/{id}/edit', [ArtistController::class, 'edit']);
Route::put('artists/{id}', [ArtistController::class, 'update']);
Route::delete('artists/{id}', [ArtistController::class, 'destroy']);

Route::get('artworks', [ArtworkController::class, 'index']);
Route::get('artworks/create', [ArtworkController::class, 'create']);
Route::post('artworks', [ArtworkController::class, 'store']);
Route::get('artworks/{id}/edit', [ArtworkController::class, 'edit']);
Route::put('artworks/{id}', [ArtworkController::class, 'update']);
Route::delete('artworks/{id}', [ArtworkController::class, 'destroy']);