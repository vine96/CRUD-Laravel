@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus usuários cadastrados</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-registers-container">
    @if(count($registers) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

        <tbody>
            @foreach ($registers as $register)
                <tr>
                   <td scope="row">{{ $loop->index + 1 }}</td>
                   <td><a href="/registers/{{ $register->id }}">{{ $register->name }}</a></td>
                   <td>{{ $register->email }}</td>
                   <td>{{ $register->zip }}</td>
                   <td><a href="#">Editar</a><a href="#">Deletar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
      <p>Você ainda não cadastrou nenhum usuário, <a href="/registers/create">Cadastrar usuário</a></p>
    @endif
</div>

@endsection
