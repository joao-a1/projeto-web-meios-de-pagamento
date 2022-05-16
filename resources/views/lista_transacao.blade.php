@extends('template')

@section('conteudo')

<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Status</th>


                        </tr>
                    </thead>
                    <tbody>
                    @foreach($transacoes as $t)
                    <tr>
                        <td>{{$t->data}}</td>
                        <td>{{$t->valor}}</td>
                        <td>{{$t->id_empresa}}</td>
                        <td>{{$t->id_status}}</td>


                        <td>
                            <a href="{{ route('transacoes_alterar', ['id' => $t->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $t->id }})" class="btn btn-danger">Excluir</a>
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
        if (confirm(`Deseja realmente excluir a transação ${id}?`)){
            location.href = route('transacoes_excluir', {'id':id});
        }
    }
</script>
@endsection