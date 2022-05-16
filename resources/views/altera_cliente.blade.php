@extends('template')

@section('titulo')
Alterar cliente - #{{ $cliente->id }}
@endsection

@section('conteudo')
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{ route('clientes_salvar') }}">             
                            <h2 class="text-center">Alterar cliente - #{{ $cliente->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $cliente->id }}">
                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $cliente->nome }}" type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->cpf }}" type = "text" name = "cpf" class="form-control" placeholder="CPF" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->telefone }}" type = "text" name = "telefone" class="form-control" placeholder="Telefone" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->email }}" type = "text" name = "email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->senha }}" type = "text" name = "senha" class="form-control" placeholder="Senha" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->n_conta }}" type = "text" name = "n_conta" class="form-control" placeholder="Senha" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cliente->saldo }}" type = "text" name = "saldo" class="form-control" placeholder="Senha" required="required">
                            </div>
                        
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                         </form>
                </div>
            </div>   

@endsection