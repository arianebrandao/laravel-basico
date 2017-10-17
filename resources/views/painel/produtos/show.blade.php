@extends('painel.templates.template')

@section('content')
<h1 class="title-pg">Produto: {{ $produto->nome }}</h1>
<a href="{{ route('produtos.index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>

<p>Ativo:       {{ $produto->ativo }}</p>
<p>Categoria:   {{ $produto->categoria }}</p>
<p>Número:      {{ $produto->numero }}</p>
<p>Descrição:   {{ $produto->descricao }}</p>

<hr/>

@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
</div>
@endif

{!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete' ]) !!}
    {!! Form::submit("Deletar Produto: $produto->nome", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection