@extends('template')

@section('conteudo')

<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($status as $s)
                    <tr>
                        <td>{{$s->nome_status}}</td>

                        <td>
                            <a href="{{ route('status_alterar', ['id' => $s->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $s->id }})" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
</div>


<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o status ${id}?`)){
            location.href = route('status_excluir', {'id':id});
        }
    }
</script>
@endsection