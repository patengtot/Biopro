@extends('layouts.main')

@section('title', 'Home')

@section('content')

<!-- HERO SECTION -->
<header class="text-center py-5 animate__animated animate__fadeIn" style="background:#031126; color:white;">
    <div class="container">

        <h1 class="display-4 fw-bold animate__animated animate__fadeInDown">
            Selamat Datang di PT Bio Produk Abadi
        </h1>

        <p class="lead mt-3 animate__animated animate__fadeInUp animate__delay-1s">
            Bergerak dengan semangat menghadirkan solusi terbaik di bidang bioteknologi pertanian.
            Mulai dari kultur jaringan, biopestisida, hingga produk riset inovatif untuk menunjang
            produktivitas pertanian modern.
        </p>

        <a href="/tentang"
           class="btn btn-light btn-lg mt-3 px-4 fw-semibold animate__animated animate__zoomIn animate__delay-2s">
            Pelajari Lebih Lanjut
        </a>

    </div>
</header>
<!-- COMPANY OVERVIEW -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <h3 class="fw-bold">Perusahaan Bioteknologi Berskala Nasional</h3>
                <p class="mt-3">
                    PT Bio Produk Abadi berfokus pada pengembangan bioteknologi pertanian
                    seperti kultur jaringan, biopestisida, dan produk-produk riset unggulan.
                    Kami mendukung pengembangan pertanian modern yang efisien, presisi, dan berkelanjutan.
                </p>
                <p>
                    Dengan laboratorium terstandarisasi dan tim riset berpengalaman,
                    kami terus menghadirkan inovasi yang dapat digunakan oleh industri maupun petani modern.
                </p>
            </div>

            <div class="col-md-6 text-center animate__animated animate__fadeInRight">
                <img src="{{ asset('proses.png') }}" class="img-fluid rounded shadow" alt="Lab Biopro">
            </div>

        </div>
    </div>
</section>

<!-- STATISTICS -->
{{-- <section class="py-5 text-white" style="background:#02101f;">
    <div class="container text-center">

        <h2 class="fw-bold mb-4 animate__animated animate__fadeInDown">Pencapaian Kami</h2>

        <div class="row mt-4">

            @php
                $stats = [
                    ['10+', 'Klien yang Dilayani'],
                    ['50+', 'Produk Tersertifikasi'],
                    ['5+', 'Tahun Pengalaman'],
                    ['20+', 'Mitra Penelitian'],
                ];
            @endphp

            @foreach ($stats as $i => $s)
            <div class="col-md-3 mb-4 animate__animated animate__zoomIn animate__delay-{{ $i+1 }}s">
                <div class="p-4">
                    <h2 class="fw-bold">{{ $s[0] }}</h2>
                    <p class="mt-2">{{ $s[1] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section> --}}

<!-- KEUNGGULAN -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold animate__animated animate__fadeInDown">
            Keunggulan Kami
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-1s">
                    <img src="{{ asset('produk.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Produk Berkualitas</h4>
                    <p class="text-muted">
                        Kami berkomitmen menghadirkan produk terbaik untuk industri maupun konsumen.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-2s">
                    <img src="{{ asset('proses.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Proses Terstandarisasi</h4>
                    <p class="text-muted">
                        Dikembangkan menggunakan teknologi modern dengan kontrol mutu ketat.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-3s">
                    <img src="{{ asset('deliv.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Pengiriman Cepat</h4>
                    <p class="text-muted">
                        Distribusi aman dan tepat waktu ke seluruh Indonesia.
                    </p>
                </div>
            </div>

        </div>

        <!-- PRODUK -->
        <h2 class="text-center mb-5 fw-bold mt-5 animate__animated animate__fadeInDown">
            Produk Kami
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-1s">
                    <img src="{{ asset('produk.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Produk Berkualitas</h4>
                    <p class="text-muted">
                        Produk unggulan hasil penelitian dan standar mutu tinggi.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-2s">
                    <img src="{{ asset('proses.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Proses Presisi</h4>
                    <p class="text-muted">
                        Menggunakan proses riset dan teknologi laboratorium terbaik.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="adv-card text-center p-4 animate__animated animate__zoomIn animate__delay-3s">
                    <img src="{{ asset('deliv.png') }}" class="adv-img mb-3">
                    <h4 class="fw-semibold">Pengiriman Cepat</h4>
                    <p class="text-muted">
                        Produk siap dikirim ke seluruh Indonesia dengan aman.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- PARTNERS -->
<section class="py-5">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">
            Dipercaya Oleh
        </h2>

        <div class="row text-center mt-4">

            @php
                $partners = ['p1.png', 'p2.png', 'p3.jpg', 'p4.png'];
            @endphp

            @foreach ($partners as $i => $p)
            <div class="col-md-3 mb-4 animate__animated animate__zoomIn animate__delay-{{ $i+1 }}s">
                <img src="{{ asset($p) }}" class="img-fluid grayscale" style="max-height:70px;">
            </div>
            @endforeach

        </div>

    </div>
</section>


<!-- TESTIMONIALS -->
<section class="py-5" style="background:#f8faff;">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">
            Apa Kata Mereka?
        </h2>

        @php
            $testi = [
                ['Budi Setiawan', 'Produk kultur jaringan Biopro berkualitas dan hasilnya sangat stabil.'],
                ['Dr. Sinta Rahayu', 'Layanan profesional dan responsif, standar laboratoriumnya sangat baik.'],
                ['PT AgroTech', 'Pengiriman cepat dan kualitas produk konsisten. Kami sangat puas.'],
                ['Dr. Rudi Hartono', 'Kualitas bibit kultur jaringan sangat unggul dan konsisten.'],
                ['CV GreenFarm', 'Pelayanan cepat, ramah, dan sangat membantu kebutuhan produksi kami.'],
            ];
        @endphp

        <!-- WRAPPER SLIDER -->
        <div class="testimonial-slider">
            
            <div class="slides-wrapper">
                @foreach (array_chunk($testi, 2) as $pair)
                <div class="slide">
                    @foreach ($pair as $t)
                    <div class="glass-card">
                        <p>"{{ $t[1] }}"</p>
                        <strong>- {{ $t[0] }}</strong>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>

            <!-- DOT INDICATOR -->
            <div class="dots text-center mt-3">
                @for ($i = 0; $i < ceil(count($testi)/2); $i++)
                    <span class="dot {{ $i==0 ? 'active' : '' }}" data-slide="{{ $i }}"></span>
                @endfor
            </div>

        </div>

    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const slides = document.querySelector(".slides-wrapper");
    const dots = document.querySelectorAll(".dot");
    let index = 0;
    const total = dots.length;

    function changeSlide(i) {
        index = i;
        slides.style.transform = `translateX(-${i * 100}%)`;

        dots.forEach(dot => dot.classList.remove("active"));
        dots[i].classList.add("active");
    }

    dots.forEach(dot => {
        dot.addEventListener("click", () => {
            changeSlide(parseInt(dot.dataset.slide));
        });
    });

    // AUTO SLIDER TIAP 5 DETIK
    setInterval(() => {
        index = (index + 1) % total;
        changeSlide(index);
    }, 5000);

});
</script>

@endsection
