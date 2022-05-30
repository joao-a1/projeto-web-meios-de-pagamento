<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PagamentosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::post('/pagamentos', 'PagamentosControllers@store')->name('pagamentos.store');
Route::post('/pagamentos', [PagamentosController::class, 'store'])->name('pagamentos_novo');
