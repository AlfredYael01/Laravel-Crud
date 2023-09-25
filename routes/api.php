<?php

use App\Http\Controllers\ElevesController;
use App\Http\Controllers\ModulesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/eleves', [ElevesController::class, 'store'])->name('eleves.store');
//
//Route::delete('/eleves/{id}', [ElevesController::class, 'destroy'])->name('eleves.destroy');
//
//Route::put('eleves/{id}', [ElevesController::class, 'update'])->name('eleves.update');
//
//Route::get('/eleves/{id}', [ElevesController::class, 'show'])->name('eleves.show');

Route::resource('/eleves', ElevesController::class);

//Route::post('/modules', [ModulesController::class, 'store'])->name('modules.store');
//
//Route::delete('/modules/{id}', [ModulesController::class, 'destroy'])->name('modules.destroy');
//
//Route::put('modules/{id}', [ModulesController::class, 'update'])->name('modules.update');
//
//Route::get('/modules/{id}', [ModulesController::class, 'show'])->name('modules.show');

Route::resource('/modules', ModulesController::class);
