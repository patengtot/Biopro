@extends('layouts.main')

@section('title', 'Produk Kami')

@section('content')

<!-- HERO SECTION -->
<header class="text-center py-5 animate__animated animate__fadeIn" 
        style="background: linear-gradient(135deg, #051329, #051329); color:white;">
    <div class="container">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">Produk PT Bio Produk Abadi</h1>
        <p class="lead mx-auto mt-3 animate__animated animate__fadeInUp animate__delay-1s" style="max-width:850px;">
            Kami menghadirkan rangkaian produk inovatif berbasis bioteknologi modern untuk mendukung pertanian 
            yang lebih sehat, efisien, dan berkelanjutan.
        </p>
    </div>
</header>

<!-- SECTION KATALOG PRODUK -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center fw-bold mb-5 animate__animated animate__fadeInDown">
            Katalog Produk Unggulan
        </h2>

        <div class="row g-4">

            <!-- PRODUK TEMPLATE -->
            @php 
                $produk = [
                    [
                        'gambar' => '/produk.png',
                        'nama' => 'Biopestisida BioPro-X',
                        'deskripsi' => 'Biopestisida ramah lingkungan berbasis mikroorganisme unggulan yang efektif mengendalikan berbagai jenis hama tanaman.'
                    ],
                    [
                        'gambar' => '/proses.png',
                        'nama' => 'Bibit Kultur Jaringan',
                        'deskripsi' => 'Bibit berkualitas hasil kultur jaringan dengan tingkat keberhasilan tinggi untuk berbagai komoditas pertanian.'
                    ],
                    [
                        'gambar' => '/deliv.png',
                        'nama' => 'Pupuk Organik BioGrow',
                        'deskripsi' => 'Pupuk organik kaya nutrisi yang membantu meningkatkan kesehatan tanah dan meningkatkan hasil produksi tanaman.'
                    ],
                    [
                        'gambar' => '/produk.png',
                        'nama' => 'Biopestisida BioPro-X',
                        'deskripsi' => 'Biopestisida ramah lingkungan berbasis mikroorganisme unggulan yang efektif mengendalikan berbagai jenis hama tanaman.'
                    ],
                    [
                        'gambar' => '/proses.png',
                        'nama' => 'Bibit Kultur Jaringan',
                        'deskripsi' => 'Bibit berkualitas hasil kultur jaringan dengan tingkat keberhasilan tinggi untuk berbagai komoditas pertanian.'
                    ],
                    [
                        'gambar' => '/deliv.png',
                        'nama' => 'Pupuk Organik BioGrow',
                        'deskripsi' => 'Pupuk organik kaya nutrisi yang membantu meningkatkan kesehatan tanah dan meningkatkan hasil produksi tanaman.'
                    ],
                ];
            @endphp

            @foreach ($produk as $index => $p)
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card shadow-sm h-100 product-card">

                    <div class="product-img-box">
                        <img src="{{ $p['gambar'] }}" class="card-img-top" alt="{{ $p['nama'] }}">
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">{{ $p['nama'] }}</h5>
                        <p class="text-muted">{{ $p['deskripsi'] }}</p>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- SECTION KEUNGGULAN -->
<section class="py-5" style="background:#f3f7ff;">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">
            Mengapa Memilih Produk BioPro?
        </h2>

        <div class="row text-center mt-4">

            @php 
                $fitur = [
                    ['Riset Ilmiah', 'Dikembangkan dengan penelitian dan uji laboratorium yang matang.'],
                    ['Kualitas Premium', 'Proses produksi mengikuti standar mutu terbaik di industrinya.'],
                    ['Teruji di Lapangan', 'Dipercaya oleh mitra pertanian profesional di berbagai daerah.'],
                ];
            @endphp

            @foreach ($fitur as $i => $f)
            <div class="col-md-4 mb-4 animate__animated animate__zoomIn animate__delay-{{ $i+1 }}s">
                <div class="p-4 border rounded h-100 feature-box">
                    <h5 class="fw-bold">{{ $f[0] }}</h5>
                    <p class="mt-2">{{ $f[1] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

@endsection

