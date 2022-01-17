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
                   <td scropt="row">{{ $loop->index + 1 }}</td>
                   <td><a href="/registers/{{ $register->id }}">{{ $register->name }}</a></td>
                   <td>{{ $register->email }}</td>
                   <td>{{ $register->zip }}</td>
                   <td>
                       <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a>
                        <form action="/registers/{{ $register->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
      <p>Você ainda não cadastrou nenhum usuário, <a href="/registers/create">Cadastrar usuário</a></p>
    @endif
</div>

@endsection
