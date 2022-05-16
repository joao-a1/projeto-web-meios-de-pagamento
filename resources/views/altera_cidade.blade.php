@extends('template')

@section('titulo')
Cidade - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('cidades_salvar')}}">             
                            <h2 class="text-center">Alterar cidade - #{{ $cidade->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $cidade->id }}">
                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $cidade->nome }}" type = "text" name = "nome" class="form-control" placeholder="Cidade" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $cidade->estado }}" type = "text" name = "estado" class="form-control" placeholder="Estado" required="required">
                            </div>

                        
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                           
                         </form>
                </div>
            </div>   
@endsection