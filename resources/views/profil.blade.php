@extends('template')
@section('title', 'Profil Sekolah')

@section('content')
    {{-- Bagian Kepala Sekolah --}}
    <h2 class="mb-4">Kepala Sekolah</h2>

    <div class="row align-items-start mb-5">
        <div class="col-md-7">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Nama</th>
                    <td>Asep Hidayat, S.Pd.</td>
                </tr>
                <tr>
                    <th>NIP</th>
                    <td>196602141992031004</td>
                </tr>
                <tr>
                    <th>Tempat Tanggal Lahir</th>
                    <td>Bandung, 4 Oktober 2004</td>
                </tr>
                <tr>
                    <th>Pangkat/ Gol. Ruang Jabatan</th>
                    <td>Kepala Sekolah</td>
                </tr>
                <tr>
                    <th>Mengajar sebagai Guru</th>
                    <td>03-07-1996</td>
                </tr>
                <tr>
                    <th>Periode sebagai Kepala Sekolah</th>
                    <td>06 Juli 2022 di SMPN 5 Bandung</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>Laki-Laki</td>
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>S2</td>
                </tr>
            </table>
        </div>

        <div class="col-md-5 text-center">
            <img src="{{ asset('assets/images/kepala-sekolah.png') }}"
                 alt="Foto Kepala Sekolah"
                 class="img-fluid rounded shadow">
        </div>
    </div>

    {{-- Bagian Sejarah Sekolah --}}
    <h2 class="mb-4">Sejarah SMP Negeri 5 Bandung</h2>
    <div class="row mb-5">
        <div class="col-md-5 mb-4">
            <img src="{{ asset('assets/images/smpn-5-bandung.jpg') }}"
                 alt="SMP Negeri 5 Bandung Sekarang"
                 class="img-fluid rounded shadow">
            <p class="text-muted text-center">SMP Negeri 5 Bandung – Sekarang</p>
        </div>

        <div class="col-md-7">
            <p>
                SMP Negeri 5 Bandung memiliki sejarah panjang yang dimulai sejak era kolonial.
                Pada tahun 1920, pemerintah kolonial Belanda mendirikan MULO
                (<em>Meer Uitgebreid Lager Onderwijs</em>) di Bandung sebagai lembaga pendidikan tingkat menengah.
                Setelah Indonesia meraih kemerdekaan, sekolah ini mengalami beberapa perubahan nama dan fungsi.
            </p>
            <p>
                Pada periode 1947–1950, terjadi peralihan fungsi menjadi VHO
                (<em>Voortgezet Hoger Onderwijs</em>) dengan penggunaan bahasa Belanda maupun Indonesia.
                Pada tahun 1950, VHO berbahasa Indonesia berubah menjadi SMA 1 B/C, sedangkan VHO berbahasa Belanda
                menjadi SMA 2 B/C. Dua tahun kemudian, tepatnya pada 1952, terjadi pemekaran:
                SMA 1 B/C terbagi menjadi SMA B dan SMA C, sementara SMA 2 B/C menjadi SMA 2 B.
                Selanjutnya, pada tahun 1956, nama sekolah kembali mengalami perubahan menjadi SMA Negeri V C.
            </p>
            <p>
                Seiring berjalannya waktu dan perkembangan sistem pendidikan, sekolah ini kemudian
                bertransformasi menjadi SMP Negeri 5 Bandung yang kita kenal hingga saat ini.
                Dengan sejarah panjang dan perjalanan transformasi yang unik,
                SMP Negeri 5 Bandung menjadi salah satu sekolah negeri yang berperan penting
                dalam dunia pendidikan di Kota Bandung.
            </p>
        </div>
    </div>

    {{-- Bagian Visi dan Misi --}}
    <h2 class="mb-4">Visi dan Misi</h2>
    <div class="row">
        <div class="col-md-6">
            <h4>Visi</h4>
            <p>
                MENJADI SEKOLAH UNGGUL YANG BERDAYA SAING GLOBAL<br>
                MENGHASILKAN LULUSAN BERKARAKTER, BERBASIS IPTEK, DAN INOVASI BERKELANJUTAN PADA TAHUN 2028
            </p>
        </div>
        <div class="col-md-6">
            <h4>Misi</h4>
            <ol>
                <li>Menghasilkan lulusan bermutu baik dan berkarakter sesuai profil pelajar Pancasila</li>
                <li>Membangun generasi literat melalui pendidikan inklusi berbasis BEST 5.0</li>
                <li>Memiliki SDM yang berkualifikasi nasional, internasional, keahlian berbasis IPTEK, manajerial dan inovasi berkelanjutan</li>
                <li>Menerapkan kurikulum lima yang RAPI (Ramah Anak, berbasis Projek, Inovatif) untuk menghasilkan lulusan yang berdaya saing global</li>
            </ol>
            <p>
                Mewujudkan tata kelola sekolah yang efektif, transparan, dan akuntabel
            </p>
        </div>
    </div>
@endsection
