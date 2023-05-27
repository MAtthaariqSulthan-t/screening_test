<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::resource('major', MajorController::class);
Route::resource('kelas', KelasController::class);
Route::resource('student', StudentController::class);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dahsboard');
