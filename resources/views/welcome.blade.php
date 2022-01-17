@extends('layouts.main')
@section('title', 'CRUD Laravel')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um registro</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="registers-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Usuários cadastrados:</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach ($registers as $register)
            <div class="card col-md-3">
                <img src="/img/registers/{{ $register->image }}" alt="{{ $register->name }}">
                <div class="card-body">
                    <p class="card-date">{{ $register->state }} - {{ $register->city }}</p>
                    <h5 class="card-title">{{ $register->name }}</h5>
                    <p class="card-participants">{{ $register->email }}</p>
                    <a href="/registers/{{ $register->id }}" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        @endforeach
        @if(count($registers) == 0 && $search)
            <p>Não foi possível encontrar nenhum registro com: {{ $search }} <a href="/">Ver todos</a></p>
        @elseif(count($registers) == 0)
            <p>Não há registros atualmente =/</p>
        @endif
    </div>
</div>

@endsection




