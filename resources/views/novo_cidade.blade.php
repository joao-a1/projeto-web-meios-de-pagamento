@extends('template')

@section('titulo')
Cidade - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('cidades_novo')}}">             
                            <h2 class="text-center">Cadastro de Cidades</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "nome" class="form-control" placeholder="Cidade" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "estado" class="form-control" placeholder="Estado" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                           
                         </form>
                </div>
            </div>   
@endsection