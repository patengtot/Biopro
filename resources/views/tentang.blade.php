@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')

<!-- HERO / INTRO -->
<header class="text-center py-5 animate__animated animate__fadeIn" style="background:#031126; color:white;">
    <div class="container">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">Tentang PT Bio Produk Abadi</h1>
        <p class="lead mx-auto mt-3 animate__animated animate__fadeInUp animate__delay-1s" style="max-width:850px;">
            Perusahaan yang berfokus pada pengembangan bioteknologi pertanian modern. 
            Dengan dukungan riset ilmiah, teknologi kultur jaringan, dan inovasi biopestisida, 
            kami menghadirkan solusi akurat dan berstandar tinggi untuk memenuhi kebutuhan pertanian berkelanjutan.
        </p>
    </div>
</header>

<!-- SECTION PROFIL -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 mb-4 animate__animated animate__fadeInLeft">
                <h3 class="fw-bold">Profil Perusahaan</h3>
                <p class="mt-3">
                    PT Bio Produk Abadi lahir dari komitmen untuk menghadirkan produk pertanian 
                    yang ramah lingkungan, efektif, dan berkualitas premium. Tim kami terdiri dari 
                    para peneliti serta praktisi berpengalaman yang terus mendorong inovasi 
                    melalui pengembangan kultur jaringan, biopestisida, dan berbagai teknologi 
                    terapan lainnya.
                </p>

                <p>
                    Kami percaya bahwa masa depan pertanian harus mengarah pada efisiensi, 
                    keberlanjutan, dan ketepatan teknologi. Oleh karena itu, setiap proses kami 
                    jalankan secara terukur, akurat, dan sesuai standar industri.
                </p>
            </div>

            <div class="col-md-6 text-center animate__animated animate__fadeInRight">
                <img src="/proses.png" alt="Laboratorium Bioteknologi" class="img-fluid rounded shadow">
            </div>

        </div>
    </div>
</section>

<!-- VISI MISI -->
<section class="py-5" style="background:#f3f7ff;">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">
            Visi & Misi Perusahaan
        </h2>

        <div class="row text-center mt-4">

            @php
                $vm = [
                    ['Visi', 'Menjadi perusahaan bioteknologi pertanian terbaik di Indonesia yang menghadirkan solusi inovatif dan berkelanjutan.'],
                    ['Misi', 'Mengembangkan produk berbasis riset ilmiah, memberikan layanan profesional, dan mendukung pertanian modern yang efisien dan ramah lingkungan.'],
                ];
            @endphp

            @foreach ($vm as $i => $item)
            <div class="col-md-6 mb-4 animate__animated animate__zoomIn animate__delay-{{ $i+1 }}s">
                <div class="p-4 border rounded h-100 bg-white feature-box">
                    <h4 class="fw-bold">{{ $item[0] }}</h4>
                    <p class="mt-3">{{ $item[1] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- NILAI PERUSAHAAN -->
<section class="py-5">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">
            Nilai & Komitmen Kami
        </h2>

        <div class="row text-center mt-4">

            @php
                $nilai = [
                    ['Inovasi Berkelanjutan', 'Terus berinovasi menciptakan produk unggulan berbasis riset.'],
                    ['Kualitas Terjamin', 'Proses produksi yang akurat dan terukur untuk kualitas terbaik.'],
                    ['Kemitraan Profesional', 'Membangun hubungan jangka panjang dengan kepercayaan.'],
                ];
            @endphp

            @foreach ($nilai as $i => $n)
            <div class="col-md-4 mb-4 animate__animated animate__zoomIn animate__delay-{{ $i+1 }}s">
                <div class="p-4 border rounded h-100 feature-box">
                    <h5 class="fw-bold">{{ $n[0] }}</h5>
                    <p class="mt-2">{{ $n[1] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>



@endsection