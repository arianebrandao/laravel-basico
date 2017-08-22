@extends('painel.templates.template')

@section('content')
<h1 class="title-pg">Listagem de Produtos</h1>

<a href="{{url('/painel/produtos/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar1</a>
<a href="{{route('produtos.create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar2</a>
<hr/>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    @foreach($produtos as $p)
    <tr>
        <td>{{$p->nome}}</td>
        <td>{{$p->descricao}}</td>
        <td>
            <a href="#" class="edit action">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <a href="#" class="delete action">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection