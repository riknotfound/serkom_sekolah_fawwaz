@extends('template')
@section('title', 'Ekstrakurikuler Sekolah')
@section('menu-ekstrakurikuler','active')
@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Ekstrakurikuler Sekolah</h2>

    @if ($ekstrakurikuler->isEmpty())
        <p class="text-center text-muted">Belum ada ekstrakurikuler tersedia.</p>
    @else
        <div class="row g-4">
            @foreach ($ekstrakurikuler as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 shadow-sm">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}">
                        @else
                            <img src="https://via.placeholder.com/400x250?text=Ekskul" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-subtitle text-muted mb-2">Pembina: {{ $item->pembina }}</p>
                            <p class="mb-1"><strong>Jadwal:</strong> {{ $item->jadwal_latihan }}</p>
                            <p class="card-text">{{ $item->deskripsi ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
