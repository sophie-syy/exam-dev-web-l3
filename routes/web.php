<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\MofifierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);

Route::post('/welcome', [CreateController::class, 'ajouter']);

Route::get('/ajouter', [CreateController::class, 'ajouter']);
Route::post('/ajouter', [CreateController::class, 'create']);

Route::get('/modifier', [MofifierController::class, 'p_modifier']);
Route::put('/modifier', [MofifierController::class, 'f_modifier']);
Route::delete('/modifier', [MofifierController::class, 'suprimer']);