<?php

use App\Http\Controllers\ElevesController;
use App\Http\Controllers\ModuleController;
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
    return view('welcome');
});

Route::get('/eleves', [ElevesController::class, 'eleves'])->name('student.add');
Route::get('/module', [ModuleController::class, 'module'])->name('module.index');
