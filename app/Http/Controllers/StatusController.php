<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    function cadastro_novo(){
        return view('novo_status');
    }

    function novo(Request $req){
        $nome_status = $req->input('nome_status');

        $status = new Status();
        $status->nome_status = $nome_status;

        $status->save();

        return redirect()->route('status_listar');
    }

    function listar(){
        $status = Status::all();

        return view('lista_status', ['status' => $status]);
    }

    function alterar($id){
        $status = Status::findOrFail($id);

        return view('altera_status', ['status' => $status]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome_status = $req->input('nome_status');

        $status = Status::findOrFail($id);
        $status->nome_status = $nome_status;

        $status->save();

        return redirect()->route('status_listar');
    }

    function excluir($id){
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('status_listar');
    }
}
