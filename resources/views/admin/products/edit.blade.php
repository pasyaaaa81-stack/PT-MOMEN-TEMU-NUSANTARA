@extends('admin.layout')
@section('title', 'Edit Produk')
@section('admin-content')
<div class="mb-4"><div class="section-kicker">Manajemen katalog</div><h2 class="fw-bold mt-2">Edit Produk</h2></div>
<div class="bg-white border rounded-4 p-4"><form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">@csrf @method('PUT')
<div class="mb-3"><label class="form-label fw-semibold">Nama Produk *</label><input name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control" required minlength="3" maxlength="100" placeholder="Contoh: Nasi Ayam Crispy">@error('name')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-3"><label class="form-label fw-semibold">Kategori *</label><select name="category_id" class="form-select" required><option value="">Pilih kategori</option>@foreach($categories as $category)<option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>{{ $category->name }}</option>@endforeach</select>@error('category_id')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-3"><label class="form-label fw-semibold">Deskripsi *</label><textarea name="description" rows="4" class="form-control" required minlength="10" maxlength="1500">{{ old('description', $product->description ?? '') }}</textarea>@error('description')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-3"><label class="form-label fw-semibold">Harga (angka) *</label><input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" class="form-control" required min="1000" max="100000000" step="1000">@error('price')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-3"><label class="form-label fw-semibold">Foto Produk (JPG/PNG/WEBP, maks. 2 MB)</label><input type="file" name="photo" class="form-control" accept=".jpg,.jpeg,.png,.webp,image/*">@error('photo')<small class="text-danger">{{ $message }}</small>@enderror
@if(isset($product) && $product->photo)<img src="{{ $product->photo_url }}" class="mt-3 rounded-3" width="130" alt="Foto saat ini">@endif</div>
<div class="form-check mb-4"><input type="checkbox" name="is_featured" value="1" class="form-check-input" id="featured" @checked(old('is_featured', $product->is_featured ?? false))><label for="featured" class="form-check-label">Tandai sebagai produk unggulan</label></div>
<button class="btn btn-primary">Simpan Produk</button> <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Batal</a>

</form></div>
@endsection
