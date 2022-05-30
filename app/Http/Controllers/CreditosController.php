<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credito;
use App\Models\Cliente;

class CreditosController extends Controller
{
    function cadastro_novo(){
        $clientes = Cliente::all();
        return view('novo_credito', ["clientes"=>$clientes]);
    }

    function novo(Request $req){
        $valor = $req->input('valor');
        $data = $req->input('data');
        $id_cliente = $req->input('id_cliente');

        $credito = new Credito();
        $credito->valor = $valor;
        $credito->data = $data;
        $credito->id_cliente = $id_cliente;

        $credito->save();

        $cliente = Cliente::findOrFail($id_cliente);

        $cliente->saldo = $cliente->saldo + $valor;
        $cliente->save();

        return redirect()->route('clientes_listar');
    }
}
