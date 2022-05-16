@extends('template')

@section('titulo')
Transação - Alteração
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('transacoes_salvar')}}">             
                            <h2 class="text-center">Alterar cidade - #{{ $transacao->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $transacao->id }}">

                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $transacao->nome }}" type = "date" name = "data" class="form-control" placeholder="Data" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $transacao->estado }}" type = "number" name = "valor" class="form-control" placeholder="Valor" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $transacao->id_empresa }}" type = "text" name = "id_empresa" class="form-control" placeholder="Id Empresa" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $transacao->id_status }}" type = "text" name = "id_status" class="form-control" placeholder="Id Status" required="required">
                            </div>

                        
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                           
                         </form>
                </div>
            </div>   
@endsection