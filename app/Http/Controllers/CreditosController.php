<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credito;
use App\Models\Cliente;

class CreditosController extends Controller
{
    function cadastro_novo(){
        return view('novo_credito');
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

        return redirect()->route('creditos_listar');
    }

    function listar(){
        $credito = Credito::all();

        return view('lista_credito', ['credito' => $credito]);
    }

    function alterar($id){
        $credito = Credito::findOrFail($id);

        return view('altera_credito', ['credito' => $credito]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $valor = $req->input('valor');
        $data = $req->input('data');
        $id_cliente = $req->input('id_cliente');

        $credito = Credito::findOrFail($id);
        $credito->valor = $valor;
        $credito->data = $data;
        $credito->id_cliente = $id_cliente;

        $credito->save();

        return redirect()->route('creditos_listar');
    }

    function excluir($id){
        $credito = Credito::findOrFail($id);
        $credito->delete();

        return redirect()->route('creditos_listar');
    }
}
