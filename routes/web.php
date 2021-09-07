<?php

use Illuminate\Support\Facades\Route;

/*
 * web routes
 */

Route::get('/', [App\Http\Controllers\UrlController::class, 'index'])->name('homepage');

Route::get('/beurl-nedir', [App\Http\Controllers\PageController::class, 'about'])->name('about');

// redirect url
Route::get('/{short_url}', [App\Http\Controllers\UrlController::class, 'show']);

