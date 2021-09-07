<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/generate', [App\Http\Controllers\UrlController::class, 'create']);