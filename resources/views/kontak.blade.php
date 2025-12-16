@extends('layouts.main')

@section('title', 'Kontak Kami')

@section('content')

<!-- HERO SECTION -->
<header class="text-center py-5 animate__animated animate__fadeIn"
    style="background: linear-gradient(135deg, #051329, #051329); color:white;">
    <div class="container">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">
            Hubungi PT Bio Produk Abadi
        </h1>
        <p class="lead mx-auto mt-3 animate__animated animate__fadeInUp animate__delay-1s" style="max-width:850px;">
            Kami siap membantu Anda dalam kebutuhan produk, kerja sama, maupun informasi layanan. 
            Silakan hubungi kami melalui informasi kontak berikut.
        </p>
    </div>
</header>

<!-- CONTACT SECTION -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row g-4">

            <!-- KONTAK LANGSUNG (TANPA FORM) -->
            <div class="col-md-7 animate__animated animate__fadeInLeft">
                <div class="card shadow-sm p-4">

                    <h4 class="fw-bold mb-3">Hubungi Kami Secara Langsung</h4>

                    <p class="mb-4">Klik tombol berikut untuk menghubungi kami dengan cepat.</p>

                    <a href="https://wa.me/6285798006701" target="_blank" class="btn btn-success w-100 mb-3"
                       style="font-size: 17px;">
                        💬 Chat via WhatsApp
                    </a>

                    <a href="mailto:pemasaran@biopro.com"
                    target="_blank"
                    class="btn btn-primary w-100 mb-3"
                    style="font-size: 17px;">
                    📧 Kirim via Gmail
                    </a>
                    <hr class="my-4">

                    <h5 class="fw-bold">Lokasi Kami</h5>

                    <!-- GOOGLE MAPS -->
                    <div class="ratio ratio-16x9 rounded">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.027702369102!2d107.772113!3d-6.9271839999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e653eb17e239%3A0xc6192a1f92aa9e41!2sPadjadjaran%20University!5e0!3m2!1sen!2sid!4v1734575200000!5m2!1sen!2sid"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
    </iframe>
</div>

                </div>
            </div>

            <!-- INFORMASI KONTAK -->
            <div class="col-md-5 animate__animated animate__fadeInRight">
                <div class="card shadow-sm p-4 h-100">

                    <h4 class="fw-bold mb-3">Informasi Kontak</h4>

                    <p><strong>Alamat:</strong><br>
                        Puri Indah, Cikeruh, Jatinangor<br>
                        Kab Sumedang, Jawa Barat<br>
                        Indonesia 45363
                    </p>

                    <p><strong>Email:</strong><br>
                        admin@biopro.com
                    </p>

                    <p><strong>No. Telepon:</strong><br>
                        +62 857-9800-6701
                    </p>

                    <hr>

                    <h5 class="fw-bold">Jam Operasional</h5>
                    <p>
                        Senin – Jumat : 08.00 – 17.00<br>
                        Sabtu & Minggu : Tutup
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
