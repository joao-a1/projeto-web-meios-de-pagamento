@extends('template')

@section('conteudo')

<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cidades as $c)
                    <tr>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->estado}}</td>

                        <td>
                            <a href="{{ route('cidades_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
</div>


<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir a cidade ${id}?`)){
            location.href = route('cidades_excluir', {'id':id});
        }
    }
</script>
@endsection