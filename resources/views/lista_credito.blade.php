@extends('template')

@section('conteudo')

<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Cliente</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($credito as $c)
                    <tr>
                        <td>{{$c->data}}</td>
                        <td>{{$c->valor}}</td>
                        @foreach($c->clientes as $p)
                            <td>{{ $p->nome }}</td>
                        @endforeach

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