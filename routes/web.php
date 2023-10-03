<?php

use App\Http\Controllers\ElevesController;
use App\Http\Controllers\EvaluationEleveController;
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

Route::resource('/eleves', ElevesController::class);

Route::resource('/module', ModuleController::class);

Route::resource('/evaluationEleve', EvaluationEleveController::class);

Route::get('/eleves', [ElevesController::class, 'eleves'])->name('student.add');

Route::get('/module', [ModuleController::class, 'module'])->name('module.index');

Route::get('/evaluationEleve', [EvaluationEleveController::class, 'evaluationEleve'])->name('evaluationEleve.index');

