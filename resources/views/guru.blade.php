@extends('template')
@section('title', 'Data Guru')
@section('menu-guru','active')
@section('content')
<section class="container py-5">
    <h1 class="mb-4 fw-bold text-center">Data Guru SMPN 1 Harapan Rakyat</h1>

    @if($guru->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada data guru di database.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Mapel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_guru }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->mapel }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
@endsection
