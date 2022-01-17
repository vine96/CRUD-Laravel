@extends('layouts.main')
@section('title', 'CRUD Laravel')
@section('content')

        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(5 > 5)
            <p>A condição é verdadeira</p>
        @else
            <p>A condição é falsa</p>
        @endif

        <a href="/list">Ir para a lista</a>

@endsection
