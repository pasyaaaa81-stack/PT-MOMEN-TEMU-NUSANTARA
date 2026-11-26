@extends('admin.layout')
@section('title', 'Dashboard Admin')
@section('admin-content')
<div class="d-flex justify-content-between align-items-center mb-4"><div><div class="section-kicker">Ringkasan website</div><h2 class="fw-bold mt-2">Dashboard</h2><p class="text-secondary mb-0">Selamat datang di panel pengelolaan MTN UMKM.</p></div><a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ Tambah Produk</a></div>
<div class="row g-3 mb-4">
    <div class="col-md-6"><div class="bg-white border rounded-4 p-4"><div class="text-secondary">Total Produk</div><div class="display-5 fw-bold">{{ $totalProducts }}</div><div class="small text-secondary">Data produk tersimpan</div></div></div>
    <div class="col-md-6"><div class="bg-white border rounded-4 p-4"><div class="text-secondary">Total Kategori</div><div class="display-5 fw-bold">{{ $totalCategories }}</div><div class="small text-secondary">Kategori produk aktif</div></div></div>
</div>
<div class="bg-white border rounded-4 p-4"><h5 class="fw-bold mb-3">Produk Terbaru</h5><div class="table-responsive"><table class="table align-middle"><thead><tr><th>Produk</th><th>Kategori</th><th>Harga</th></tr></thead><tbody>
@forelse($latestProducts as $product)<tr><td class="fw-semibold">{{ $product->name }}</td><td>{{ $product->category->name }}</td><td>Rp{{ number_format($product->price,0,',','.') }}</td></tr>@empty<tr><td colspan="3" class="text-center text-secondary">Belum ada data produk.</td></tr>@endforelse
</tbody></table></div></div>
@endsection
