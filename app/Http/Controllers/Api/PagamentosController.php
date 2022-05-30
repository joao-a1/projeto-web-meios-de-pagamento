<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Transacao;
use App\Models\Cliente;
use App\Models\Empresa;
use GuzzleHttp\Client;

class PagamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //dd($req->all());
        $token = $req->input("token");
        $cpf_cliente = $req->input("CpfCliente");
        $valor = $req->input("valor");

        $empresa = Empresa::where('token_acesso', '=', $token)->first();
        $cliente = Cliente::where('cpf', '=', $cpf_cliente)->first();
        //$id_empresa = DB::select('select id from empresas where token_acesso = ?', [$token]);
        //$saldo_cliente = DB::select('select saldo from clientes where saldo >= ? and cpf = ?', [$valor][$cpf_cliente]);
        if ($empresa) {
            if (!$cliente) {
                $cliente = new Cliente();
                $cliente->cpf = $cpf_cliente;
                $cliente->saldo = 50.00;

                $cliente->save();
            }

            if ($cliente->saldo >= $valor) {

                $transacao = new Transacao();
                $transacao->data = new DateTime();
                $transacao->id_empresa = $empresa->id;
                $transacao->valor = $valor;

                $transacao->id_status = 1;

                $transacao->save();

                $cliente->saldo = $cliente->saldo - $valor;
                $cliente->save();

                $data = [
                    "status" => "Sucesso",
                    "mensagem" => "Pagamento Realizado"
                ];
                return response()->json($data, 201);
            } else {
                $data = [
                    "status" => "Insucesso",
                    "mensagem" => "Saldo indisponível"
                ];
                return response()->json($data, 401);
            }
        } else {
            $data = [
                "status" => "Insucesso",
                "mensagem" => "Token não identificado"
            ];
            return response()->json($data, 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
