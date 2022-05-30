@extends('template')

@section('titulo')
Cliente - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('clientes_novo')}}">             
                            <h2 class="text-center">Cadastro de Clientes</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "cpf" id="inputCPF" class="form-control" placeholder="CPF" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "telefone" id="inputTelefone" class="form-control" placeholder="Telefone" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "password" name = "senha" class="form-control" placeholder="Senha" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "n_conta" class="form-control" placeholder="Número da Conta" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "saldo" class="form-control" placeholder="Saldo" required="required">
                            </div>
                            
                            <div class="form-group pt-3 pb-3">                                
                                <select name="id_cidade" class="form-select">
                                <option value="">Selecione...</option>
                                @foreach($cidades as $c)
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(
        function(){
            $("#inputCPF").mask("000.000.000-00");
            $("#inputTelefone").mask("(00) 0000-0000");

        }
    );
</script>
   
@endsection