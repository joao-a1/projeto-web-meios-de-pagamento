<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\TransacoesController;
use App\Http\Controllers\CreditosController;
use App\Http\Controllers\StatusController;

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
        Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');

    Route::middleware('auth')->group(function () {
        Route::middleware('verifica.nivel')->group(function(){
            Route::get('/empresas/novo', [EmpresasController::class, 'cadastro_novo']);  
            Route::post('/empresas/novo', [EmpresasController::class, 'novo'])->name('empresas_novo');
            Route::get('/empresas/alterar/{id}', [EmpresasController::class, 'alterar'])->name('empresas_alterar');
            Route::post('/empresas/alterar/', [EmpresasController::class, 'salvar'])->name('empresas_salvar');
            Route::get('/empresas/excluir/{id}', [EmpresasController::class, 'excluir'])->name('empresas_excluir');
            Route::get('/empresas/listar', [EmpresasController::class, 'listar'])->name('empresas_listar');
    
            Route::get('/transacoes/novo', [TransacoesController::class, 'cadastro_novo']);
            Route::post('/transacoes/novo', [TransacoesController::class, 'novo'])->name('transacoes_novo');
            Route::get('/transacoes/alterar/{id}', [TransacoesController::class, 'alterar'])->name('transacoes_alterar');
            Route::post('/transacoes/alterar/', [TransacoesController::class, 'salvar'])->name('transacoes_salvar');
            Route::get('/transacoes/excluir/{id}', [TransacoesController::class, 'excluir'])->name('transacoes_excluir');
            Route::get('/transacoes/listar', [TransacoesController::class, 'listar'])->name('transacoes_listar');
    
    
            Route::get('/creditos/novo', [CreditosController::class, 'cadastro_novo']);
            Route::post('/creditos/novo', [CreditosController::class, 'novo'])->name('creditos_novo');
            Route::post('/creditos/alterar/', [CreditosController::class, 'salvar'])->name('creditos_salvar');
    
            Route::get('/cidades/novo', [CidadesController::class, 'cadastro_novo']);
            Route::post('/cidades/novo', [CidadesController::class, 'novo'])->name('cidades_novo');
            Route::get('/cidades/alterar/{id}', [CidadesController::class, 'alterar'])->name('cidades_alterar');
            Route::post('/cidades/alterar/', [CidadesController::class, 'salvar'])->name('cidades_salvar');
            Route::get('/cidades/excluir/{id}', [CidadesController::class, 'excluir'])->name('cidades_excluir');
            Route::get('/cidades/listar', [CidadesController::class, 'listar'])->name('cidades_listar');
    
            Route::get('/status/novo', [StatusController::class, 'cadastro_novo']);
            Route::post('/status/novo', [StatusController::class, 'novo'])->name('status_novo');
            Route::get('/status/alterar/{id}', [StatusController::class, 'alterar'])->name('status_alterar');
            Route::post('/status/alterar/', [StatusController::class, 'salvar'])->name('status_salvar');
            Route::get('/status/excluir/{id}', [StatusController::class, 'excluir'])->name('status_excluir');
            Route::get('/status/listar', [StatusController::class, 'listar'])->name('status_listar');
    });
});

require __DIR__.'/auth.php';