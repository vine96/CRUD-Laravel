@extends('layouts.main')
@section('title', 'CRUD Laravel')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um registro</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="registers-container" class="col-md-12">
    <h2>Usuários cadastrados:</h2>
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
    </div>
</div>

@endsection




