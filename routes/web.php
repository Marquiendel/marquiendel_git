<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllerx\AlunoCrontroler;

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

Route::get('/exemplo', function(){
    return view(view:'exemplo');
});

Route::get('alunos', [App\Http\Controllers\AlunoController::class, 'listar'])->name('alunos.listar');
Route::get('alunos/{id}',[App\Http\Controllers\AlunoController::class, 'listarID']);

Route::get('novoAluno', [App\Http\Controllers\AlunoController::class, 'criar']);
Route::post('salvar', [App\Http\Controllers\AlunoController::class, 'store'])->name('alunos.salvar');
Route::post('atualizarAluno', [App\Http\Controllers\AlunoController::class, 'update'])->name('atualizar.alunos');

