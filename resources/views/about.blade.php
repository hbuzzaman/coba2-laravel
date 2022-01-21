@extends('layouts.main')


@section('container')
    <H1>Halaman ABOUT</H1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnail rounded-circle">
    
@endsection