@extends('layouts.main')
@section('title', 'Usuário info')
@section('content')

    @if ($id == null)
        <p>Sem conteúdo</p>
    @else
      <p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection
