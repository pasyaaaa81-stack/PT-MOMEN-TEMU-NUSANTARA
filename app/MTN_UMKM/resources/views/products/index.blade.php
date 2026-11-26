@extends('layouts.app')
@section('title', 'Katalog Produk')
@section('content')
<div class="soft-section py-5"><div class="container"><div class="section-kicker">Katalog UMKM</div><h1 class="fw-bold display-5 mt-2">Semua Produk</h1><p class="text-secondary mb-0">Temukan produk yang sesuai dengan seleramu.</p></div></div>
<div class="container py-5">
    <form method="GET" class="row g-2 mb-4">
        <div class="col-md-5"><input class="form-control" name="cari" value="{{ request('cari') }}" placeholder="Cari nama produk..."></div>
        <div class="col-md-4"><select class="form-select" name="kategori"><option value="">Semua kategori</option>@foreach($categories as $category)<option value="{{ $category->slug }}" @selected(request('kategori') == $category->slug)>{{ $category->name }}</option>@endforeach</select></div>
        <div class="col-md-3 d-grid"><button class="btn btn-primary">Terapkan Filter</button></div>
    </form>
    <div class="row g-4">
        @forelse($products as $product)
        <div class="col-sm-6 col-lg-4">
            <div class="product-card">
                <a href="{{ route('products.show', $product->slug) }}"><img src="{{ $product->photo_url }}" alt="{{ $product->name }}"></a>
                <div class="p-3"><span class="category-pill">{{ $product->category->name }}</span><h5 class="fw-bold mt-3">{{ $product->name }}</h5><p class="text-secondary small">{{ \Illuminate\Support\Str::limit($product->description, 85) }}</p><div class="d-flex justify-content-between align-items-center"><span class="price">Rp{{ number_format($product->price, 0, ',', '.') }}</span><a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-outline-primary">Lihat detail</a></div></div>
            </div>
        </div>
        @empty
        <div class="col-12"><div class="text-center py-5"><div class="display-4">🔎</div><h4 class="fw-bold mt-3">Produk tidak ditemukan</h4><p class="text-secondary">Coba kata kunci atau kategori lainnya.</p><a href="{{ route('products.index') }}" class="btn btn-primary">Reset pencarian</a></div></div>
        @endforelse
    </div>
    <div class="mt-4">{{ $products->links() }}</div>
</div>
@endsection
