<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CreateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);


Route::post('/welcome', [CreateController::class, 'ajouter']);
Route::get('/ajouter', [CreateController::class, 'ajouter']);
Route::post('/ajouter', [CreateController::class, 'create']);