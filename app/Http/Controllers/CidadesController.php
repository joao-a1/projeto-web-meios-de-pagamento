<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadesController extends Controller
{
    function cadastro_novo(){
        return view('novo_cidade');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $estado = $req->input('estado');

        $cidade = new Cidade();
        $cidade->nome = $nome;
        $cidade->estado = $estado;

        $cidade->save();

        return redirect()->route('cidades_listar');
    }

    function listar(){
        $cidades = Cidade::all();

        return view('lista_cidade', ['cidades' => $cidades]);
    }

    function alterar($id){
        $cidade = Cidade::findOrFail($id);

        return view('altera_cidade', ['cidade' => $cidade]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $estado = $req->input('estado');

        $cidade = Cidade::findOrFail($id);
        $cidade->nome = $nome;
        $cidade->estado = $estado;

        $cidade->save();

        return redirect()->route('cidades_listar');
    }

    function excluir($id){
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();

        return redirect()->route('cidades_listar');
    }
}
