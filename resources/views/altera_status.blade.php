@extends('template')

@section('titulo')
Status - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('status_salvar')}}">             
                            <h2 class="text-center">Alterar status - {{ $status->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $status->id }}">
                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $status->nome_status }}" type = "text" name = "nome_status" class="form-control" placeholder="Cidade" required="required">
                            </div>
             
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                           
                         </form>
                </div>
            </div>   
@endsection