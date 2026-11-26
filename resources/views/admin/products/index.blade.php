@extends('admin.layout')
@section('title', 'Data Produk')
@section('admin-content')
<div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4"><div><div class="section-kicker">Manajemen katalog</div><h2 class="fw-bold mt-2 mb-0">Data Produk</h2></div><a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ Tambah Produk</a></div>
<div class="bg-white border rounded-4 p-3"><div class="table-responsive"><table class="table align-middle"><thead><tr><th>Foto</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Aksi</th></tr></thead><tbody>
@forelse($products as $product)<tr><td><img src="{{ $product->photo_url }}" width="58" height="48" class="rounded-2" style="object-fit:cover"></td><td class="fw-semibold">{{ $product->name }}</td><td>{{ $product->category->name }}</td><td>Rp{{ number_format($product->price,0,',','.') }}</td><td><div class="d-flex gap-2"><a href="{{ route('admin.products.edit',$product) }}" class="btn btn-sm btn-outline-primary">Edit</a><form method="POST" action="{{ route('admin.products.destroy',$product) }}" onsubmit="return confirm('Hapus produk ini?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Hapus</button></form></div></td></tr>
@empty<tr><td colspan="5" class="text-center text-secondary py-4">Belum ada produk.</td></tr>@endforelse
</tbody></table></div>{{ $products->links() }}</div>
@endsection
