@extends('layouts.main')
@section('title', $register->name)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/registers/{{ $register->image }}" class="img-fluid" alt="{{ $register->name }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $register->name }}</h1>
            <p class="register-criado"><ion-icon name="calendar-outline"></ion-icon>Criado em: {{ date('d/m/Y', strtotime($register->created_at)) }} às {{ date('H:i', strtotime($register->created_at)) }}</p>
            <p class="register-email"><ion-icon name="mail-outline"></ion-icon> {{ $register->email }}</p>
            <p class="register-cep"><ion-icon name="pin-outline"></ion-icon> {{ $register->zip }}</p>
            <p class="register-estado"><ion-icon name="location-outline"></ion-icon> {{ $register->state }} - {{ $register->city }}</p>
            <p class="register-cidade"><ion-icon name="navigate-outline"></ion-icon> {{ $register->rua }}</p>
            <p class="register-bairro"><ion-icon name="earth-outline"></ion-icon> {{ $register->bairro }} - {{ $register->ibge }}</p>
        </div>
    </div>
</div>

@endsection




