@extends('template')

@section('titulo')
Alterar Empresa
@endsection

@section('conteudo')
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{ route('empresas_salvar') }}">             
                            <h2 class="text-center">Alterar empresa - {{ $empresa->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $empresa->id }}">
                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $empresa->razao_social }}" type = "text" name = "razao_social" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $empresa->cnpj }}" type = "text" name = "cnpj" class="form-control" placeholder="CPF" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $empresa->telefone }}" type = "text" name = "telefone" class="form-control" placeholder="Telefone" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $empresa->email }}" type = "text" name = "email" class="form-control" placeholder="Email" required="required">
                            </div>
                    
                        
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                         </form>
                </div>
            </div>   

@endsection