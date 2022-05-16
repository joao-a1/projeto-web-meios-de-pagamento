<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transacao;
use App\Models\Empresa;
use App\Models\Status;

class TransacoesController extends Controller
{
    function cadastro_novo(){
        $empresas = Empresa::all();
        $status = Status::all();
        return view('nova_transacao',["empresas"=>$empresas],['status'=>$status]);
    }

    function novo(Request $req){
        $data = $req->input('data');
        $id_empresa = $req->input('id_empresa');
        $valor = $req->input('valor');
        $id_status = $req->input('id_status');

        $transacao = new Transacao();
        $transacao->data = $data;
        $transacao->id_empresa = $id_empresa;
        $transacao->valor = $valor;
        $transacao->id_status = $id_status;

        $transacao->save();

        return redirect()->route('transacoes_listar');
    }

    function listar(){
        $transacoes = Transacao::all();

        return view('lista_transacao', ['transacoes' => $transacoes]);
    }

    function alterar($id){
        $transacao = Transacao::findOrFail($id);

        return view('altera_transacao', ['transacoes' => $transacao]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $data = $req->input('data');
        $id_empresa = $req->input('id_empresa');
        $valor = $req->input('valor');
        $id_status = $req->input('id_status');

        $transacao = Transacao::findOrFail($id);
        $transacao->data = $data;
        $transacao->id_empresa = $id_empresa;
        $transacao->valor = $valor;
        $transacao->id_status = $id_status;

        $transacao->save();

        return redirect()->route('transacoes_listar');
    }

    function excluir($id){
        $transacao = Transacao::findOrFail($id);
        $transacao->delete();

        return redirect()->route('transacoes_listar');
    }
}
