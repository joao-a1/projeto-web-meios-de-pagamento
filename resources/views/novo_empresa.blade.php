@extends('template')

@section('titulo')
Empresas - Novo
@endsection

@section('conteudo')

<div class="container col-7">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('empresas_novo')}}">             
                            <h2 class="text-center">Cadastro de Empresas</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "razao_social" class="form-control" placeholder="Razão Social" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "cnpj" id="inputCPNJ" class="form-control" placeholder="CNPJ" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "telefone" id="inputTelefone" class="form-control" placeholder="Telefone" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "token_acesso" class="form-control" placeholder="Token_Acesso" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "saldo" class="form-control" placeholder="Saldo" required="required">
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
            $("#inputCPNJ").mask("00.000.000/0000-00");
            $("#inputTelefone").mask("(00) 0000-0000");
            


        }
    );
</script> 
@endsection