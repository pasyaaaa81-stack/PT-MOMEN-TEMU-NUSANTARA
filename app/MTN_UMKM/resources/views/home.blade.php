@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<div class="container py-5">
    <section class="hero p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <div class="hero-kicker mb-3">Solusi digital untuk UMKM</div>
                <h1 class="display-4 mb-3">Temukan produk favorit, dukung usaha lokal.</h1>
                <p class="lead text-white-50 mb-4">Jelajahi pilihan makanan dan minuman berkualitas dari UMKM lokal. Praktis, mudah, dan selalu dekat dengan kebutuhanmu.</p>
                <a href="{{ route('products.index') }}" class="btn btn-light text-primary fw-bold px-4 py-3">Jelajahi Produk <span class="ms-2">→</span></a>
            </div>
            <div class="col-lg-5"><div class="hero-art" aria-label="Ilustrasi makanan">🍱</div></div>
        </div>
    </section>

    <section class="py-5">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div><div class="section-kicker">Jelajahi pilihan</div><h2 class="fw-bold mt-2 mb-0">Kategori Produk</h2></div>
            <a href="{{ route('products.index') }}" class="text-decoration-none fw-bold">Semua produk →</a>
        </div>
        <div class="row g-3">
            @foreach($categories as $category)
            <div class="col-6 col-md-4">
                <a href="{{ route('products.index', ['kategori' => $category->slug]) }}" class="text-decoration-none">
                    <div class="p-4 rounded-4 border h-100">
                        <div class="fs-2 mb-2">{{ $loop->iteration == 1 ? '🍛' : ($loop->iteration == 2 ? '🥟' : '🥤') }}</div>
                        <h5 class="fw-bold text-dark mb-1">{{ $category->name }}</h5>
                        <small class="text-secondary">{{ $category->products_count }} produk tersedia</small>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="pb-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div><div class="section-kicker">Pilihan untukmu</div><h2 class="fw-bold mt-2 mb-0">Produk Unggulan</h2></div>
            <a href="{{ route('products.index') }}" class="text-decoration-none fw-bold">Lihat katalog →</a>
        </div>
        <div class="row g-4">
            @forelse($products as $product)
            <div class="col-sm-6 col-lg-4">
                <div class="product-card">
                    <a href="{{ route('products.show', $product->slug) }}"><img src="{{ $product->photo_url }}" alt="{{ $product->name }}"></a>
                    <div class="p-3">
                        <span class="category-pill">{{ $product->category->name }}</span>
                        <h5 class="fw-bold mt-3 mb-2">{{ $product->name }}</h5>
                        <p class="text-secondary small">{{ \Illuminate\Support\Str::limit($product->description, 75) }}</p>
                        <div class="d-flex justify-content-between align-items-center"><span class="price">Rp{{ number_format($product->price, 0, ',', '.') }}</span><a class="btn btn-sm btn-outline-primary" href="{{ route('products.show', $product->slug) }}">Detail</a></div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12"><div class="alert alert-info">Belum ada produk. Jalankan seeder untuk menampilkan data contoh.</div></div>
            @endforelse
        </div>
    </section>
    <section class="soft-section rounded-4 p-4 p-lg-5 mt-4">
        <div class="row align-items-center g-3">
            <div class="col-lg-8"><div class="section-kicker">Tentang kami</div><h2 class="fw-bold mt-2">Teknologi yang mendukung usaha lokal.</h2><p class="text-secondary mb-0">PT MOMEN TEMU NUSANTARA menghadirkan solusi digital yang membantu UMKM memperkenalkan produk, mengelola katalog, dan menjangkau pelanggan dengan lebih mudah.</p></div>
            <div class="col-lg-4 text-lg-end"><a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Produk</a></div>
        </div>
    </section>
</div>
@endsection
