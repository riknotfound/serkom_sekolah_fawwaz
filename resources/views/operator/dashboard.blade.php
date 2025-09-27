@extends('template')
@section('title', 'Dashboard Operator')
@section('content')

    <h1>Dashboard Operator</h1>
    <p>Selamat datang, {{ session('username') }}!</p>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
@endsection
