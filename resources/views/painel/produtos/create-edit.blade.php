@extends('painel.templates.template')

@section('content')
<h1 class="title-pg">
    Gestão Produto: {{ $produto->nome or 'Novo' }}
</h1>

<a href="{{ route('produtos.index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>

@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
</div>
@endif

@if(isset($produto))
    <!-- <form class="form" method="post" action="{{route('produtos.update', $produto->id)}}">
        {!! method_field('PUT') !!} -->
    {!! Form::model($produto, ['route' => ['produtos.update', $produto->id], 'class' => 'form', 'method' => 'put' ]) !!}
@else
    {!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}
@endif
    <!-- {!! csrf_field() !!} -->
    <div class="form-group">
        <!-- <input type="text" name="nome" placeholder="Nome:" class="form-control" value="{{$produto->nome or old('nome')}}"/> -->
        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
    </div>

    <div class="form-group">
        <label>
            <!-- <input type="checkbox" name="ativo" value="1" @if (isset($produto) && $produto->ativo == '1') checked @endif /> Ativo? -->
            {!! Form::checkbox('ativo', null) !!}
            Ativo?
        </label>
    </div>
    
    <div class="form-group">
        <!-- <input type="number" name="numero" placeholder="Número:" class="form-control" value="{{$produto->numero or old('numero')}}" /> -->
        {!! Form::number('numero', null, ['class' => 'form-control', 'placeholder' => 'Número:']) !!}
    </div>
    
    <div class="form-group">
        <!-- <select name="categoria" class="form-control">
            <option value="">Escolha a categoria:</option>
            @foreach($categorias as $c)
            <option value="{{$c}}"
                    @if(isset($produto) && $produto->categoria == $c)
                        selected
                    @endif
                    >{{$c}}</option>
            @endforeach
        </select> -->
        {!! Form::select('categoria', $categorias, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <!-- <textarea name="descricao" placeholder="Descrição" class="form-control">{{$produto->descricao or old('descricao')}}</textarea> -->
        {!! Form::textarea('descricao', null, ['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
    </div>
    <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection