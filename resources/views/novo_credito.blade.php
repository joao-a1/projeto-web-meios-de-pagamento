@extends('template')

@section('titulo')
Crédito - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('creditos_novo')}}">             
                            <h2 class="text-center">Cadastro de Crédito</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "date" value="2022-05-30" name = "data" class="form-control" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "Number" name = "valor" class="form-control" placeholder="Valor" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <select name="id_cliente" class="form-select">
                                    @foreach($clientes as $c)

                                    <option value="{{$c->id}}">{{$c->nome}}</option>

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

