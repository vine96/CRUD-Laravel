@extends('layouts.main')
@extends('registers.cep')
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
            <input type="text" class="form-control" id="zip" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" name="zip" placeholder="Digite o seu cep">
        </div>
        <div class="form-group">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="form-group">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" id="uf" name="state" readonly>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="city" readonly>
        </div>
        <div class="form-group">
            <label for="ibge">IBGE:</label>
            <input type="text" class="form-control" id="ibge" name="ibge" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Criar">
    </form>
</div>

@endsection

@section('content2')
@endsection
