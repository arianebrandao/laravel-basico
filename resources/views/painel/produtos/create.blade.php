@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Gestão Produto</h1>

@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
</div>
@endif

<form class="form" method="post" action="{{route('produtos.store')}}">
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="nome" placeholder="Nome:" class="form-control" value="{{old('nome')}}"/>
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="ativo" value="1" /> Ativo?
        </label>
    </div>
    
    <div class="form-group">
        <input type="number" name="numero" placeholder="Número:" class="form-control" value="{{old('numero')}}" />
    </div>
    
    <div class="form-group">
        <select name="categoria" class="form-control">
            <option value="">Escolha a categoria:</option>
            @foreach($categorias as $c)
            <option value="{{$c}}">{{$c}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <textarea name="descricao" placeholder="Descrição" class="form-control">{{old('descricao')}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection