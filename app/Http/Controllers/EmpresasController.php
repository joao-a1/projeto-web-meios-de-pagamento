<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    function cadastro_novo(){
        return view('novo_empresa');
    }

    function novo(Request $req){
        $razao_social = $req->input('razao_social');
        $cnpj = $req->input('cnpj');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $token_acesso = Hash::make($req->input('token_acesso'));
        $saldo = $req->input('saldo');

        $empresa = new Empresa();
        $empresa->razao_social = $razao_social;
        $empresa->cnpj = $cnpj;
        $empresa->telefone = $telefone;
        $empresa->email = $email;
        $empresa->token_acesso = $token_acesso;
        $empresa->saldo = $saldo;

        $empresa->save();

        return redirect()->route('empresas_listar');
    }

    function listar(){
        $empresas = Empresa::all();

        return view('lista_empresa', ['empresas' => $empresas]);
    }

    function alterar($id){
        $empresa = Empresa::findOrFail($id);

        return view('altera_empresa', ['empresa' => $empresa]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $razao_social = $req->input('razao_social');
        $cnpj = $req->input('cnpj');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $token_acesso = $req->input('token_acesso');
        $saldo = $req->input('saldo');

        $empresa = Empresa::findOrFail($id);
        $empresa->razao_social = $razao_social;
        $empresa->cnpj = $cnpj;
        $empresa->telefone = $telefone;
        $empresa->email = $email;
        $empresa->token_acesso = $token_acesso;
        $empresa->saldo = $saldo;

        $empresa->save();

        return redirect()->route('empresas_listar');
    }

    function excluir($id){
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return redirect()->route('empresas_listar');
    }
}
