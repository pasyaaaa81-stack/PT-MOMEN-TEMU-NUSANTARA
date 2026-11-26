@extends('admin.layout')
@section('title', 'Kategori')
@section('admin-content')
<div class="d-flex justify-content-between align-items-center mb-4"><div><div class="section-kicker">Manajemen katalog</div><h2 class="fw-bold mt-2">Kategori Produk</h2></div><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">+ Tambah Kategori</a></div>
<div class="bg-white border rounded-4 p-3"><div class="table-responsive"><table class="table align-middle"><thead><tr><th>Nama Kategori</th><th>Jumlah Produk</th><th>Deskripsi</th><th>Aksi</th></tr></thead><tbody>
@forelse($categories as $category)<tr><td class="fw-semibold">{{ $category->name }}</td><td>{{ $category->products_count }}</td><td>{{ $category->description }}</td><td><div class="d-flex gap-2"><a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-sm btn-outline-primary">Edit</a><form method="POST" action="{{ route('admin.categories.destroy',$category) }}" onsubmit="return confirm('Hapus kategori ini?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Hapus</button></form></div></td></tr>
@empty<tr><td colspan="4" class="text-center">Belum ada kategori.</td></tr>@endforelse
</tbody></table></div>{{ $categories->links() }}</div>
@endsection
