<?php

use App\Http\Controllers\GalleryController  ;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/store-foto', [GalleryController::class, 'store']);

Route::get('/', [GalleryController::class, 'showFoto']); // untuk show all foto di homepage

Route::delete('/delete-foto/{id}', [GalleryController::class, 'delete']); // Delete file di DB