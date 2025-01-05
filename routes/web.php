<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/{project}', [ProjectsController::class, 'show']);

Route::post('/projects', [ProjectsController::class, 'store'])->middleware('auth');




