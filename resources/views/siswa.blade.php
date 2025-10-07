@extends('template')
@section('title', 'Data Siswa')
@section('menu-siswa','active')
@section('content')
<section class="container py-5">
    <h1 class="mb-4 fw-bold text-center">Data Siswa SMPN 1 Harapan Rakyat</h1>

    @if($siswa->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada data siswa di database.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
@endsection
