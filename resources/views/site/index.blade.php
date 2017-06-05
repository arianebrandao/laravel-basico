@extends('site.templates.template1')

@section('content')

    <h1>Home page do site !!</h1>
    {{$var2 or 'var2 Não existe.'}}
    {{ $xss }}
    
    @if($var1 == '123')
        <p>var1 Existe.</p>
    @else
        <p>var1 Não existe.</p>
    @endif
    
    @unless($var1 == '1234')
        <p>Não é igual.. unless</p>
    @endunless
    
    @for($i = 0; $i <10; $i++)
        <p>For: {{$i}}</p>
    @endfor
    
    {{-- isso é um comentario
    @if(count($arrayData) > 0)
        @foreach($arrayData as $array)
            <p>Foreach: {{$array}}</p>
        @endforeach
    @else
        <p>ArrayData vazio!</p>
    @endif
    --}}

    @forelse($arrayData as $array)
        <p>Forelse: {{$array}}</p>
    @empty
        <p>ArrayData vazio!</p>
    @endforelse
    
    @php
        
    @endphp
    
    @include('site.includes.sidebar', compact('var1'))

@endsection

@push('scripts')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endpush