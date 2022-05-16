@extends('template')

@section('titulo')
Transação - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('transacoes_novo')}}">             
                            <h2 class="text-center">Cadastro de Clientes</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "date" name = "data" class="form-control" placeholder="Data" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "Number" name = "valor" class="form-control" placeholder="Valor" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "id_empresa" class="form-control" placeholder="Id Empresa" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "id_status" class="form-control" placeholder="Id Status" required="required">
                            </div>
                           
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                         </form>
                </div>
            </div>   
@endsection