@extends('layouts.')
@section('title', 'Profil Sekolah')
@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        @if($profil->logo)
            <img src="{{ asset('storage/'.$profil->logo) }}"
                 alt="Logo Sekolah"
                 class="mb-3"
                 style="max-height:150px;">
        @endif
        <h2 class="fw-bold">{{ $profil->nama_sekolah }}</h2>
        <p class="text-muted mb-0">NPSN: {{ $profil->npsn }}</p>
        <p class="mb-0">{{ $profil->alamat }}</p>
        <p class="mb-0">Telp: {{ $profil->telepon }} | Email: {{ $profil->email }}</p>
    </div>

    <div class="mb-4">
        <h4 class="fw-bold">Sejarah</h4>
        <p style="text-align: justify;">{{ $profil->sejarah }}</p>
    </div>

    <div class="mb-4">
        <h4 class="fw-bold">Visi</h4>
        <blockquote class="border-start ps-3 fst-italic text-primary">
            "{{ $profil->visi }}"
        </blockquote>
    </div>

    <div class="mb-4">
        <h4 class="fw-bold">Misi</h4>
        <ul>
            @foreach(explode("\n", $profil->misi) as $misi)
                @if(trim($misi) != '')
                    <li>{{ $misi }}</li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
@endsection
