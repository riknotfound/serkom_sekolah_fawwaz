@extends('admin.template')
@section('title', 'Profil Sekolah')
@section('menu-profil', 'active')
@section('content')
<div class="container">
    <h1 class="mb-4">Profil Sekolah</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($profil)
        <div class="card shadow-sm p-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    @if($profil->logo)
                        <img src="{{ asset('storage/' . $profil->logo) }}" class="img-fluid rounded" alt="Logo Sekolah">
                    @else
                        <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Logo">
                    @endif
                </div>
                <div class="col-md-9">
                    <h3>{{ $profil->nama_sekolah }}</h3>
                    <p><strong>NPSN:</strong> {{ $profil->npsn ?? '-' }}</p>
                    <p><strong>Alamat:</strong> {{ $profil->alamat ?? '-' }}</p>
                    <p><strong>Telepon:</strong> {{ $profil->telepon ?? '-' }}</p>
                    <p><strong>Email:</strong> {{ $profil->email ?? '-' }}</p>
                    <hr>
                    <p><strong>Sejarah:</strong> {!! nl2br(e($profil->sejarah)) !!}</p>
                    <p><strong>Visi:</strong> {!! nl2br(e($profil->visi)) !!}</p>
                    <p><strong>Misi:</strong> {!! nl2br(e($profil->misi)) !!}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.profil.edit') }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('admin.profil.confirmDelete') }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    @else
        <p>Profil sekolah belum dibuat.</p>
        <a href="{{ route('admin.profil.create') }}" class="btn btn-primary">Tambah Profil</a>
    @endif
</div>
@endsection
