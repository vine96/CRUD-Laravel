@extends('layouts.main')
@section('title', 'Cadastro de Usuário')
@section('content')

<div id="register-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Usuário</h1>
    <form action="/registers" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Selecione uma foto sua:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="zip">Cep:</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Digite o seu cep">
        </div>
        <div class="form-group">
            <label for="state">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Digite o seu estado">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Digite a sua cidade">
        </div>
        <input type="submit" class="btn btn-success" value="Criar">
    </form>
</div>

@endsection
