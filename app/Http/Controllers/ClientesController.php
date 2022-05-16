<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Cidade;

class ClientesController extends Controller
{
    function cadastro_novo(){
        $cidades = Cidade::all();
        return view('novo_cliente',["cidades"=>$cidades]);
    }

    function novo(Request $req){

        $nome = $req->input('nome');
        $cpf = $req->input('cpf');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $n_conta = $req->input('n_conta');
        $saldo = $req->input('saldo');
        $id_cidade = $req->input('id_cidade');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->telefone = $telefone;
        $cliente->email = $email;
        $cliente->senha = $senha;
        $cliente->n_conta = $n_conta;
        $cliente->saldo = $saldo;
        $cliente->id_cidade = $id_cidade;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function listar(){
        $clientes = Cliente::all();

        return view('lista_cliente', ['clientes' => $clientes]);
    }

    function alterar($id){
        $cliente = Cliente::findOrFail($id);

        return view('altera_cliente', ['cliente' => $cliente]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $cpf = $req->input('cpf');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $n_conta = $req->input('n_conta');
        $saldo = $req->input('saldo');
        $id_cidade = $req->input('id_cidade');

        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->telefone = $telefone;
        $cliente->email = $email;
        $cliente->senha = $senha;
        $cliente->n_conta = $n_conta;
        $cliente->saldo = $saldo;
        $cliente->id_cidade = $id_cidade;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function excluir($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes_listar');
    }
}
