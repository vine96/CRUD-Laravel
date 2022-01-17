@extends('layouts.main')
@extends('registers.cep')
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
            <input type="text" class="form-control" id="zip" value="{{ $register->zip }}" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" name="zip" placeholder="Digite o seu cep">
        </div>
        <div class="form-group">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" value="{{ $register->rua }}">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $register->bairro }}">
        </div>
        <div class="form-group">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" id="uf" name="state" readonly value="{{ $register->state }}">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="city" value="{{ $register->city }}" readonly>
        </div>
        <div class="form-group">
            <label for="ibge">IBGE:</label>
            <input type="text" class="form-control" id="ibge" name="ibge" value="{{ $register->ibge }}" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Editar Registro">
    </form>
</div>

@endsection

@section('content2')
@endsection
