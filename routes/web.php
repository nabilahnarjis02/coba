<?php

use App\http\controllers\MhsController;
use App\http\controllers\MtkController;
use App\http\controllers\AbsController;
use App\http\controllers\KtmController;
use App\http\controllers\JdwController;
use App\http\controllers\SmtController;
use Illuminate\Support\Facades\Route;


Route::resource('mahasiswas', MhsController::class);
Route::resource('matakuliahs', MtkController::class);
Route::resource('absensis', AbsController::class);
Route::resource('kontrakmks', KtmController::class);
Route::resource('jadwals', JdwController::class);
Route::resource('semesters', SmtController::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regddleware group. Now create something great!
|ister web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" mi
*/
//Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);
//Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);


Route::get('', [MhsController::class, 'index']);
Route::get('', [MtkController::class, 'index']);
Route::get('', [AbsController::class, 'index']);
Route::get('', [KtmController::class, 'index']);
Route::get('', [JdwController::class, 'index']);
Route::get('', [SmtController::class, 'index']);
Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);
Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);
Route::delete('/matakuliahs/{id}', [MtkController::class, 'destroy']);
Route::put('/matakuliahs/{id}', [MtkController::class, 'update']);
Route::delete('/absensis/{id}', [AbsController::class, 'destroy']);
Route::put('/absensis/{id}', [AbsController::class, 'update']);
Route::delete('/kontrakmks/{id}', [KtmController::class, 'destroy']);
Route::put('/kontrakmks/{id}', [KtmController::class, 'update']);
Route::delete('/semesters/{id}', [SmtController::class, 'destroy']);
Route::put('/semesters/{id}', [SmtController::class, 'update']);