<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\TurmaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', [CursoController::class, 'index']);
<<<<<<< HEAD
=======
Route::get('/cursos/{id}/show', [CursoController::class, 'show'])->where('id','[0-9]+');
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::post('/cursos/store', [CursoController::class, 'store']);
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit']);
Route::post('/cursos/update', [CursoController::class, 'update']);
Route::get('/cursos/{id}/destroy', [CursoController::class, 'destroy']);

Route::get('/periodo', [PeriodoController::class, 'index']);
Route::get('/periodo/{id}/show', [PeriodoController::class, 'show'])->where('id','[0-9]+');
Route::get('/periodo/create', [PeriodoController::class, 'create']);
Route::post('/periodo/store', [PeriodoController::class, 'store']);
Route::get('/periodo/{id}/edit', [PeriodoController::class, 'edit']);
Route::post('/periodo/update', [PeriodoController::class, 'update']);
Route::get('/periodo/{id}/destroy', [PeriodoController::class, 'destroy']);

Route::get('/resposta', [RespostaController::class, 'index']);
Route::get('/resposta/{id}/show', [RespostaController::class, 'show'])->where('id','[0-9]+');
Route::get('/resposta/create', [RespostaController::class, 'create']);
Route::post('/resposta/store', [RespostaController::class, 'store']);
Route::get('/resposta/{id}/edit', [RespostaController::class, 'edit']);
Route::post('/resposta/update', [RespostaController::class, 'update']);
Route::get('/resposta/{id}/destroy', [RespostaController::class, 'destroy']);

Route::get('/turma', [TurmaController::class, 'index']);
Route::get('/turma/{id}/show', [TurmaController::class, 'show'])->where('id','[0-9]+');
Route::get('/turma/create', [TurmaController::class, 'create']);
Route::post('/turma/store', [TurmaController::class, 'store']);
Route::get('/turma/{id}/edit', [TurmaController::class, 'edit']);
Route::post('/turma/update', [TurmaController::class, 'update']);
Route::get('/turma/{id}/destroy', [TurmaController::class, 'destroy']);
>>>>>>> a4ec5421b82d1b79f9513de8fd1b2b55cef5f758
