<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

        Route::get('/clientes/novo', [ClientesController::class, 'cadastro_novo']);
        Route::post('/clientes/novo', [ClientesController::class, 'novo'])->name('clientes_novo');
        Route::get('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');
        Route::post('/clientes/alterar/', [ClientesController::class, 'salvar'])->name('clientes_salvar');
        Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');
    

Route::middleware('auth')->group(function () {
    Route::middleware('verifica.nivel')->group(function(){
    
        Route::get('/empresas/novo', [EmpresasController::class, 'cadastro_novo']);
        Route::post('/empresas/novo', [EmpresasController::class, 'novo'])->name('empresas_novo');
        Route::get('/empresas/alterar/{id}', [EmpresasController::class, 'alterar'])->name('empresas_alterar');
        Route::post('/empresas/alterar/', [EmpresasController::class, 'salvar'])->name('empresas_salvar');
        Route::get('/empresas/excluir/{id}', [EmpresasController::class, 'excluir'])->name('empresas_excluir');

        Route::get('/transacoes/novo', [TransacoesController::class, 'cadastro_novo']);
        Route::post('/transacoes/novo', [TransacoesController::class, 'novo'])->name('transacoes_novo');
        Route::get('/transacoes/alterar/{id}', [TransacoesController::class, 'alterar'])->name('transacoes_alterar');
        Route::post('/transacoes/alterar/', [TransacoesController::class, 'salvar'])->name('transacoes_salvar');
        Route::get('/transacoes/excluir/{id}', [TransacoesController::class, 'excluir'])->name('transacoes_excluir');

        Route::get('/creditos/novo', [EmpresasController::class, 'cadastro_novo']);
        Route::post('/creditos/novo', [EmpresasController::class, 'novo'])->name('creditos_novo');
        Route::get('/creditos/alterar/{id}', [EmpresasController::class, 'alterar'])->name('creditos_alterar');
        Route::post('/creditos/alterar/', [EmpresasController::class, 'salvar'])->name('creditos_salvar');
        Route::get('/creditos/excluir/{id}', [EmpresasController::class, 'excluir'])->name('creditos_excluir');

        Route::get('/cidades/novo', [CidadesController::class, 'cadastro_novo']);
        Route::post('/cidades/novo', [CidadesController::class, 'novo'])->name('cidades_novo');
        Route::get('/cidades/alterar/{id}', [CidadesController::class, 'alterar'])->name('cidades_alterar');
        Route::post('/cidades/alterar/', [CidadesController::class, 'salvar'])->name('cidades_salvar');
        Route::get('/cidades/excluir/{id}', [CidadesController::class, 'excluir'])->name('cidades_excluir');

        
    });
});

require __DIR__.'/auth.php';