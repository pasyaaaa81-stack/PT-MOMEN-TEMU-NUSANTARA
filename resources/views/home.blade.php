
@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
<style>
    .hero {
        background: linear-gradient(110deg, #102f57ed, #1769aaad),
        url('https://images.unsplash.com/photo-1445116572660-236099ec97a0?w=1400') center/cover;
        min-height: 480px;
        display: flex;
        align-items: center;
    }

    .hero-content {
        max-width: 720px;
    }

    .hero h1 {
        font-size: clamp(2.3rem, 5vw, 4rem);
    }

    .section-image {
        width: 100%;
        height: 340px;
        object-fit: cover;
        border-radius: 22px;
    }

    .business-image {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-radius: 18px;
    }

    .gallery-image {
        width: 100%;
        height: 230px;
        object-fit: cover;
        border-radius: 16px;
        transition: .3s;
    }

    .gallery-image:hover {
        transform: translateY(-5px);
    }

    .feature-box {
        background: white;
        border: 1px solid #e8eef5;
        border-radius: 18px;
        padding: 25px;
        height: 100%;
    }

    .company-photo {
        border-radius: 22px;
        overflow: hidden;
    }

    .company-photo img {
        width: 100%;
        height: 100%;
        min-height: 300px;
        object-fit: cover;
    }
</style>
@endpush

@section('content')

<!-- HERO -->
<section class="container py-4">
    <div class="hero p-4 p-md-5 rounded-4 text-white">
        <div class="hero-content">
            <span class="hero-kicker">
                PT MOMEN TEMU NUSANTARA
            </span>

            <h1 class="fw-bold mt-3">
                Membangun Momen,
                Menghadirkan Pengalaman.
            </h1>

            <p class="mt-4 text-white-50 fs-6">
                Menghadirkan pengalaman kuliner dan hospitality
                melalui kualitas produk, pelayanan, dan suasana
                yang memberikan kesan bermakna bagi setiap pelanggan.
            </p>

            <div class="d-flex flex-wrap gap-2 mt-4">
                <a href="#tentang" class="btn btn-light fw-bold">
                    Tentang Perusahaan
                </a>

                <a href="#bisnis" class="btn btn-outline-light fw-bold">
                    Jelajahi Bisnis
                </a>
            </div>
        </div>
    </div>
</section>


<!-- PROFIL SINGKAT -->
<section class="container py-5">
    <div class="text-center mb-4">
        <span class="section-kicker">Nilai Perusahaan</span>
        <h2 class="fw-bold mt-2">Apa yang Kami Hadirkan?</h2>
        <p class="text-secondary">
            Komitmen MTN dalam membangun pengalaman berkualitas.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-box text-center">
                <div class="fs-1 mb-3">✦</div>
                <h5 class="fw-bold">Kualitas</h5>
                <p class="text-secondary mb-0">
                    Mengutamakan kualitas produk dan pelayanan
                    dalam setiap pengalaman pelanggan.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box text-center">
                <div class="fs-1 mb-3">☕</div>
                <h5 class="fw-bold">Inovasi</h5>
                <p class="text-secondary mb-0">
                    Terus mengembangkan ide dan inovasi
                    dalam bidang kuliner dan hospitality.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box text-center">
                <div class="fs-1 mb-3">♡</div>
                <h5 class="fw-bold">Kebersamaan</h5>
                <p class="text-secondary mb-0">
                    Menciptakan suasana yang nyaman
                    untuk berbagai momen kebersamaan.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- TENTANG KAMI -->
<section id="tentang" class="soft-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="company-photo">
                    <img
                        src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1000"
                        alt="Suasana kedai kopi modern"
                        loading="lazy">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="section-kicker">
                    Tentang Perusahaan
                </span>

                <h2 class="fw-bold mt-2">
                    Mengenal PT Momen Temu Nusantara
                </h2>

                <p class="text-secondary lh-lg mt-3">
                    PT Momen Temu Nusantara atau MTN merupakan
                    perusahaan yang berfokus pada bidang kuliner
                    dan hospitality. Kami hadir dengan semangat
                    menghadirkan produk berkualitas serta pelayanan
                    yang memberikan pengalaman positif bagi pelanggan.
                </p>

                <p class="text-secondary lh-lg">
                    Melalui pengembangan MTN Coffee & Cafe,
                    perusahaan berupaya menciptakan ruang yang
                    nyaman untuk menikmati makanan, minuman,
                    dan berbagai momen kebersamaan.
                </p>

                <a href="#bisnis" class="btn btn-primary mt-2">
                    Kenali Unit Bisnis Kami
                </a>
            </div>

        </div>
    </div>
</section>


<!-- VISI DAN MISI -->
<section class="container py-5">
    <div class="text-center mb-4">
        <span class="section-kicker">Arah Perusahaan</span>
        <h2 class="fw-bold mt-2">Visi dan Misi Kami</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="feature-box">
                <h4 class="fw-bold text-primary">Visi</h4>
                <p class="text-secondary mb-0">
                    Menjadi perusahaan kuliner dan hospitality
                    yang inovatif, terpercaya, dan mampu memberikan
                    pengalaman terbaik bagi masyarakat.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="feature-box">
                <h4 class="fw-bold text-primary">Misi</h4>
                <ul class="text-secondary mb-0">
                    <li>Menghadirkan produk dan layanan berkualitas.</li>
                    <li>Mengutamakan kepuasan pelanggan.</li>
                    <li>Mengembangkan inovasi bisnis kuliner.</li>
                    <li>Menciptakan pengalaman nyaman dan berkesan.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- UNIT BISNIS -->
<section id="bisnis" class="soft-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-kicker">Unit Bisnis</span>
            <h2 class="fw-bold mt-2">Bisnis Kami</h2>
            <p class="text-secondary">
                Mengenal unit bisnis yang dikembangkan
                oleh PT Momen Temu Nusantara.
            </p>
        </div>

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1000"
                    alt="Interior MTN Coffee and Cafe"
                    class="business-image"
                    loading="lazy">
            </div>

            <div class="col-lg-6">
                <span class="category-pill">Food & Beverage</span>

                <h2 class="fw-bold mt-3">
                    MTN Coffee & Cafe
                </h2>

                <h6 class="text-primary fw-bold">
                    Mampir, Teguk, Nikmati.
                </h6>

                <p class="text-secondary lh-lg mt-3">
                    MTN Coffee & Cafe merupakan unit bisnis
                    PT Momen Temu Nusantara yang menghadirkan
                    berbagai pilihan makanan dan minuman untuk
                    menemani aktivitas dan momen kebersamaan.
                </p>

                <p class="text-secondary lh-lg">
                    Dengan mengutamakan kualitas produk,
                    kenyamanan tempat, dan pelayanan,
                    MTN Coffee & Cafe berupaya menjadi
                    tempat yang menyenangkan bagi pelanggan.
                </p>

                <a href="{{ route('products.index') }}"
                   class="btn btn-primary mt-2">
                    Lihat Produk Kami
                </a>
            </div>

        </div>
    </div>
</section>


<!-- GALERI -->
<section class="container py-5">
    <div class="text-center mb-5">
        <span class="section-kicker">Galeri</span>
        <h2 class="fw-bold mt-2">
            Suasana dan Pengalaman
        </h2>
        <p class="text-secondary">
            Inspirasi suasana yang menggambarkan pengalaman
            MTN Coffee & Cafe.
        </p>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <img
                src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800"
                class="gallery-image"
                alt="Suasana coffee shop"
                loading="lazy">
        </div>

        <div class="col-md-4">
            <img
                src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800"
                class="gallery-image"
                alt="Kopi dan suasana cafe"
                loading="lazy">
        </div>

        <div class="col-md-4">
            <img
                src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800"
                class="gallery-image"
                alt="Interior restoran"
                loading="lazy">
        </div>
    </div>
</section>


<!-- PRODUK -->
<section class="soft-section py-5">
    <div class="container text-center">
        <span class="section-kicker">Katalog Produk</span>

        <h2 class="fw-bold mt-2">
            Pilihan Produk MTN Coffee & Cafe
        </h2>

        <p class="text-secondary mx-auto"
           style="max-width:650px">
            Temukan berbagai pilihan makanan dan minuman
            yang kami hadirkan untuk menemani setiap momen Anda.
        </p>

        <a href="{{ route('products.index') }}"
           class="btn btn-primary mt-3">
            Jelajahi Semua Produk
        </a>
    </div>
</section>


<!-- PENUTUP -->
<section class="container py-5">
    <div class="hero p-4 p-md-5 text-center">
        <span class="hero-kicker">
            PT MOMEN TEMU NUSANTARA
        </span>

        <h2 class="fw-bold mt-3">
            Setiap Pertemuan Memiliki Cerita.
        </h2>

        <p class="text-white-50 mt-3 mx-auto"
           style="max-width:650px">
            Kami percaya bahwa momen sederhana dapat menjadi
            pengalaman yang berharga. Bersama MTN, mari
            membangun lebih banyak momen bermakna.
        </p>

        <a href="{{ route('products.index') }}"
           class="btn btn-light fw-bold mt-3">
            Kunjungi Katalog Kami
        </a>
    </div>
</section>

@endsection
