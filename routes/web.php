<?php

use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::resource('projects', ProjectController::class);
    Route::resource('membres', MembreController::class);
    Route::resource('tasks', TaskController::class);
    Route::post('/loadTask', [App\Http\Controllers\TaskController::class, 'task']);
    Route::post('/changeStatus', [App\Http\Controllers\HomeController::class, 'changeStatus']);
    Route::fallback(function () {return view('errors.404');});
    Route::get('/SendEmail', [App\Http\Controllers\EmailController::class, 'sendEmail']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
