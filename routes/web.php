<?php

use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
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

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('projects', ProjectController::class);
    Route::resource('membres', MembreController::class);
    Route::resource('tasks', TaskController::class);
    Route::post('/loadTask', [TaskController::class, 'task']);
    Route::post('/loadTaskHome', [HomeController::class, 'loadTask']);
    Route::post('/changeStatus', [HomeController::class, 'changeStatus']);
    Route::get('/editProfile', [HomeController::class, 'editProfile'])->name('editProfile');
    Route::put('/profileEdit', [HomeController::class, 'profileEdit'])->name('profileEdit');
    Route::fallback(function () {
        return view('errors.404');
    });
    Route::get('SendEmail/{email}/{password}', [EmailController::class, 'sendEmail'])->name('SendEmail');
});
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');
    Route::post('/loadTaskUser', [HomeController::class, 'loadTaskUser']);
    Route::post('/changeStatusUser', [HomeController::class, 'changeStatusUser']);
});


