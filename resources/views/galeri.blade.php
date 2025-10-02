@extends('template')
@section('title', 'Galeri Sekolah')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Galeri Sekolah</h2>

    @if ($galeri->isEmpty())
        <p class="text-center text-muted">Belum ada galeri tersedia.</p>
    @else
        <div class="row g-4">
            @foreach ($galeri as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 shadow-sm">
                        <div class="ratio ratio-16x9">
                            @if ($item->kategori === 'foto')
                                <img src="{{ asset('storage/' . $item->file) }}"
                                     class="card-img-top object-fit-cover"
                                     alt="{{ $item->judul }}">
                            @elseif ($item->kategori === 'video')
                                <video class="card-img-top" controls>
                                    <source src="{{ asset('storage/' . $item->file) }}" type="video/mp4">
                                    Browser Anda tidak mendukung pemutaran video.
                                </video>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text text-muted small mb-1">
                                {{ $item->tanggal ? \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') : '-' }}
                            </p>
                            <p class="card-text">{{ $item->keterangan ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $galeri->links() }}
        </div>
    @endif
</div>
@endsection
