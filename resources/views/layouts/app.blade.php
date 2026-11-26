
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Beranda') | PT Momen Temu Nusantara</title>

    <meta name="description" content="PT Momen Temu Nusantara (MTN), perusahaan yang bergerak di bidang kuliner dan hospitality dengan menghadirkan produk berkualitas dan pengalaman berkesan.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #123d70;
            --blue: #1769aa;
            --ink: #172b4d;
            --muted: #718096;
            --pale: #f3f7fc;
        }

        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            color: var(--ink);
            background: #fff;
        }

        .navbar {
            background: #fff;
            box-shadow: 0 4px 22px #102c4a0d;
        }

        .brand-mark {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            background: var(--navy);
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 800;
            font-size: 15px;
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--navy);
        }

        .brand-name {
            line-height: 1.3;
            font-size: .9rem;
        }

        .brand-subtitle {
            font-size: .62rem;
            letter-spacing: .08em;
            color: var(--muted);
            font-weight: 700;
        }

        .nav-link {
            font-weight: 600;
            color: #52647c;
        }

        .nav-link:hover {
            color: var(--blue);
        }

        .btn-primary {
            background: var(--navy);
            border-color: var(--navy);
            border-radius: 10px;
            font-weight: 700;
            padding: .7rem 1.1rem;
        }

        .btn-primary:hover {
            background: #0b2d55;
            border-color: #0b2d55;
        }

        .btn-outline-primary {
            border-color: var(--navy);
            color: var(--navy);
            border-radius: 10px;
            font-weight: 700;
        }

        .hero {
            background: linear-gradient(120deg, #102f57, #1769aa);
            color: #fff;
            border-radius: 28px;
            overflow: hidden;
        }

        .hero-kicker {
            color: #b9dcff;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            font-size: .75rem;
        }

        .hero h1 {
            font-weight: 800;
            letter-spacing: -.04em;
            line-height: 1.12;
        }

        .hero-art {
            min-height: 280px;
            background:
                radial-gradient(circle at 65% 35%, #ffffff55, transparent 35%),
                linear-gradient(145deg, #4e9cdb, #123d70);
            border-radius: 22px;
            display: grid;
            place-items: center;
            font-size: 6rem;
        }

        .section-kicker {
            color: var(--blue);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .12em;
            font-size: .72rem;
        }

        .product-card {
            border: 1px solid #e8eef5;
            border-radius: 18px;
            overflow: hidden;
            transition: .2s;
            height: 100%;
            background: #fff;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 35px #123d7014;
        }

        .product-card img {
            width: 100%;
            height: 205px;
            object-fit: cover;
            background: var(--pale);
        }

        .price {
            color: var(--navy);
            font-weight: 800;
        }

        .category-pill {
            background: #eaf3fc;
            color: var(--navy);
            font-weight: 700;
            border-radius: 30px;
            padding: .4rem .75rem;
            font-size: .75rem;
        }

        .soft-section {
            background: var(--pale);
        }

        .company-info {
            background: #f3f7fc;
            border: 1px solid #e6edf5;
            border-radius: 18px;
            padding: 25px;
            height: 100%;
        }

        footer {
            background: #102f57;
            color: #dce9f8;
        }

        .footer-title {
            font-weight: 800;
            letter-spacing: .04em;
        }

        .form-control,
        .form-select {
            padding: .75rem .9rem;
            border-radius: 10px;
            border-color: #dbe4ee;
        }

        .admin-sidebar {
            background: #102f57;
            min-height: calc(100vh - 70px);
            color: #fff;
        }

        .admin-sidebar a {
            color: #dce9f8;
            text-decoration: none;
            display: block;
            padding: .75rem 1rem;
            border-radius: 10px;
        }

        .admin-sidebar a:hover {
            background: #ffffff18;
        }

        .table>:not(caption)>*>* {
            padding: .9rem .75rem;
        }
    </style>

    @stack('styles')
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container py-2">

        <a class="navbar-brand d-flex align-items-center gap-2"
           href="{{ route('home') }}">

            <span class="brand-mark">MTN</span>

            <span class="brand-name">
                PT MOMEN TEMU NUSANTARA
                <small class="d-block brand-subtitle">
                    COMPANY PROFILE & BUSINESS
                </small>
            </span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">

            <div class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <a class="nav-link" href="{{ route('home') }}">
                    Beranda
                </a>

                <a class="nav-link" href="{{ route('home') }}#tentang">
                    Tentang Kami
                </a>

                <a class="nav-link" href="{{ route('home') }}#bisnis">
                    Unit Bisnis
                </a>

                <a class="nav-link" href="{{ route('products.index') }}">
                    Produk
                </a>

                <a class="btn btn-primary ms-lg-2"
                   href="{{ route('admin.login') }}">
                    Admin Panel
                </a>

            </div>
        </div>
    </div>
</nav>

@if(session('success') || session('error'))
<div class="container mt-3">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

</div>
@endif

@yield('content')

<footer class="mt-5 py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">

                <h5 class="footer-title">
                    PT MOMEN TEMU NUSANTARA
                </h5>

                <p class="small opacity-75 mb-2">
                    Membangun Momen, Menghadirkan Pengalaman.
                </p>

                <p class="small opacity-75 mb-0">
                    Perusahaan yang bergerak di bidang kuliner dan
                    hospitality dengan komitmen menghadirkan
                    produk berkualitas serta pengalaman berkesan
                    bagi setiap pelanggan.
                </p>

            </div>

            <div class="col-md-3">

                <h6 class="fw-bold">Navigasi</h6>

                <div class="small d-flex flex-column gap-2">
                    <a href="{{ route('home') }}"
                       class="text-decoration-none text-light">
                        Beranda
                    </a>

                    <a href="{{ route('home') }}#tentang"
                       class="text-decoration-none text-light">
                        Tentang Kami
                    </a>

                    <a href="{{ route('products.index') }}"
                       class="text-decoration-none text-light">
                        Produk
                    </a>
                </div>

            </div>

            <div class="col-md-3">

                <h6 class="fw-bold">Unit Bisnis</h6>

                <p class="small opacity-75 mb-1">
                    MTN Coffee & Cafe
                </p>

                <p class="small opacity-75">
                    Menghadirkan pilihan makanan dan minuman
                    untuk menemani setiap momen.
                </p>

            </div>

        </div>

        <hr class="border-light opacity-25 my-4">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between gap-2">

            <div class="small opacity-75">
                © {{ date('Y') }} PT Momen Temu Nusantara.
                All Rights Reserved.
            </div>

            <div class="small opacity-75">
                MTN | Membangun Momen, Menghadirkan Pengalaman.
            </div>

        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>
