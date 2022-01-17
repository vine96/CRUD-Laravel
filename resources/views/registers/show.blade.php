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
            <p class="register-email"><ion-icon name="mail-outline"></ion-icon> {{ $register->email }}</p>
            <p class="register-cep"><ion-icon name="pin-outline"></ion-icon> {{ $register->zip }}</p>
            <p class="register-estado"><ion-icon name="location-outline"></ion-icon> {{ $register->state }}</p>
            <p class="register-cidade"><ion-icon name="navigate-outline"></ion-icon> {{ $register->city }}</p>
        </div>
    </div>
</div>

@endsection




