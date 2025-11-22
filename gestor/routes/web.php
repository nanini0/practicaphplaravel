<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::resource('tasks',TaskController::class);
Route::resource('recetas',RecetasController::class);