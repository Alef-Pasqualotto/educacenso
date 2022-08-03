<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\InicioController;
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
   echo 'baita';
});

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/{id}/show', [CursoController::class, 'show'])->where('id','[0-9]+');
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::post('/cursos/store', [CursoController::class, 'store']);
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit']);
Route::post('/cursos/update', [CursoController::class, 'update']);
Route::get('/cursos/{id}/destroy', [CursoController::class, 'destroy']);

Route::get('/periodos', [PeriodoController::class, 'index']);
Route::get('/periodos/{id}/show', [PeriodoController::class, 'show'])->where('id','[0-9]+');
Route::get('/periodos/create', [PeriodoController::class, 'create']);
Route::post('/periodos/store', [PeriodoController::class, 'store']);
Route::get('/periodos/{id}/edit', [PeriodoController::class, 'edit']);
Route::post('/periodos/update', [PeriodoController::class, 'update']);
Route::get('/periodos/{id}/destroy', [PeriodoController::class, 'destroy']);

Route::get('/respostas', [RespostaController::class, 'index']);
Route::get('/respostas/{id}/show', [RespostaController::class, 'show'])->where('id','[0-9]+');
Route::get('/respostas/create', [RespostaController::class, 'create']);
Route::post('/respostas/store', [RespostaController::class, 'store']);
Route::get('/respostas/{id}/edit', [RespostaController::class, 'edit']);
Route::post('/respostas/update', [RespostaController::class, 'update']);
Route::get('/respostas/{id}/destroy', [RespostaController::class, 'destroy']);

Route::get('/turmas', [TurmaController::class, 'index']);
Route::get('/turmas/{id}/show', [TurmaController::class, 'show'])->where('id','[0-9]+');
Route::get('/turmas/create', [TurmaController::class, 'create']);
Route::post('/turmas/store', [TurmaController::class, 'store']);
Route::get('/turmas/{id}/edit', [TurmaController::class, 'edit']);
Route::post('/turmas/update', [TurmaController::class, 'update']);
Route::get('/turmas/{id}/destroy', [TurmaController::class, 'destroy']);

Route::view('/inicio/', 'inicio.index');
 
