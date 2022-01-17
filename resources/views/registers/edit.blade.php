@extends('layouts.main')
@section('title', 'Editando: ' . $register->name)
@section('content')

<div id="register-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $register->name }}</h1>
    <form action="/registers/update/{{ $register->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Selecione uma foto sua:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/registers/{{ $register->image }}" alt="{{ $register->name }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo" value="{{ $register->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email"  value="{{ $register->email }}">
        </div>
        <div class="form-group">
            <label for="zip">Cep:</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Digite o seu cep" value="{{ $register->zip }}">
        </div>
        <div class="form-group">
            <label for="state">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Digite o seu estado" value="{{ $register->state }}">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Digite a sua cidade" value="{{ $register->city }}">
        </div>
        <input type="submit" class="btn btn-success" value="Editar Registro">
    </form>
</div>

@endsection
