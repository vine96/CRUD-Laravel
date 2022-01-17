@extends('layouts.main')
@section('title', 'CRUD Laravel')
@section('content')

@foreach($registers as $register)
    <p>{{ $register->name }} -- {{ $register->email }}</p>
@endforeach

@endsection




