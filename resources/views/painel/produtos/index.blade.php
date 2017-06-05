<h1>Listagem de Produtos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    @foreach($produtos as $p)
    <tr>
        <td>{{$p->nome}}</td>
        <td>{{$p->descricao}}</td>
    </tr>
    @endforeach
</table>