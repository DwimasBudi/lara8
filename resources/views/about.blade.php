@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="vio" width="200" class="rounded-circle shadow">
@endsection