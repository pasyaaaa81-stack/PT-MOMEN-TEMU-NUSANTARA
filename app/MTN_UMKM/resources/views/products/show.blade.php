@extends('layouts.app')
@section('title', $product->name)
@section('content')
<div class="container py-5">
    <div class="mb-4"><a href="{{ route('products.index') }}" class="text-decoration-none">← Kembali ke produk</a></div>
    <div class="row g-5 align-items-start">
        <div class="col-lg-6"><img src="{{ $product->photo_url }}" alt="{{ $product->name }}" class="w-100 rounded-4" style="max-height:480px;object-fit:cover"></div>
        <div class="col-lg-6">
            <span class="category-pill">{{ $product->category->name }}</span>
            <h1 class="fw-bold display-5 mt-3">{{ $product->name }}</h1>
            <div class="price fs-3 mb-4">Rp{{ number_format($product->price, 0, ',', '.') }}</div>
            <h6 class="fw-bold">Deskripsi Produk</h6><p class="text-secondary lh-lg">{{ $product->description }}</p>
            <div class="p-3 rounded-4 soft-section mt-4"><strong>Informasi usaha</strong><p class="text-secondary small mb-0 mt-1">Produk UMKM yang dipasarkan melalui platform digitalPT MOMEN TEMU NUSANTARA.</p></div>
            <a href="{{ route('products.index') }}" class="btn btn-primary mt-4">Jelajahi produk lainnya</a>
        </div>
    </div>
    @if($relatedProducts->count())
    <section class="mt-5"><h3 class="fw-bold mb-4">Produk dalam kategori yang sama</h3><div class="row g-4">
        @foreach($relatedProducts as $item)
        <div class="col-md-4"><div class="product-card"><a href="{{ route('products.show', $item->slug) }}"><img src="{{ $item->photo_url }}" alt="{{ $item->name }}"></a><div class="p-3"><h5 class="fw-bold">{{ $item->name }}</h5><span class="price">Rp{{ number_format($item->price, 0, ',', '.') }}</span></div></div></div>
        @endforeach
    </div></section>
    @endif
</div>
@endsection
