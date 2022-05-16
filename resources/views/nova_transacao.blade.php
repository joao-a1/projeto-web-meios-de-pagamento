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
                                <select name="id_empresa" class="form-select">
                                    @foreach($empresas as $e)

                                    <option value="{{$e->id}}">{{$e->razao_social}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <select name="id_status" class="form-select">
                                    @foreach($status as $s)

                                    <option value="{{$s->id}}">{{$s->nome_status}}</option>

                                    @endforeach

                                </select>
                            </div>

                           
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                         </form>
                </div>
            </div> 

@endsection

