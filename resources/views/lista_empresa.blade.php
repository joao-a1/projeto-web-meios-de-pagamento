@extends('template')

@section('conteudo')

<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Razão Social</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Token de Acesso</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($empresas as $e)
                    <tr>
                        <td>{{$e->razao_social}}</td>
                        <td>{{$e->cnjp}}</td>
                        <td>{{$e->telefone}}</td>
                        <td>{{$e->email}}</td>
                        <td>{{$e->token_acesso}}</td>
                        <td>{{$e->saldo}}</td>
                        <td>
                            <a href="{{ route('empresas_alterar', ['id' => $e->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $e->id }})" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    

                    </tbody>
                </table>
            </div>
        </div>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir a empresa ${id}?`)){
            location.href = route('empresas_excluir', {'id':id});
        }
    }
</script>
@endsection
