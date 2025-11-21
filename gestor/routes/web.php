<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RecetasController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks',TaskController::class);
Route::resource('recetas',RecetasController::class);