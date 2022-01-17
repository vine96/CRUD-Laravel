@extends('layouts.main')
@section('title', 'Lista de usuários')
@section('content')

<h1>Essa é a página de listas =)</h1>
<p>Seu nome é {{ $nome }}</p>
<p>Sua idade é {{ $idade }} anos</p>
<p>Sua profissão é {{ $profissao }}</p>

@for ($i = 0; $i < count($arr); $i++)
    <p>Posição: {{ $arr[$i] }} - {{ $i }}</p>
@endfor

@foreach ($nomes as $nome)
    <p> {{ $loop->index }}</p>
    <p> {{ $nome }}</p>
@endforeach

@if ($busca == '')
    <h1>O usuário não digitou nada =/</h1>
@else
<h1>O produto foi: {{ $busca }}</h1>
@endif

@endsection


<a href="/">Voltar</a>


