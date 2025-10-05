@extends('template')
@section('title', 'Berita')

@section('content')
<section class="container py-5">
    <h2 class="mb-4 text-center">Berita Terkini</h2>

    @if($berita->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada berita yang dipublikasikan.
        </div>
    @else
        <div class="row">
            @foreach($berita as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" class="card-img-top" alt="Tidak ada gambar">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="text-muted small mb-2">
                                📅 {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </p>
                            <p class="card-text">
                                {{ Str::limit(strip_tags($item->isi_berita), 100, '...') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection
