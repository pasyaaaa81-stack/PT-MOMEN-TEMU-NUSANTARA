@extends('admin.layout')
@section('title', 'Edit Kategori')
@section('admin-content')
<h2 class="fw-bold mb-4">Edit Kategori</h2><div class="bg-white border rounded-4 p-4"><form method="POST" action="{{ route('admin.categories.update', $category) }}">@csrf @method('PUT')
<div class="mb-3"><label class="form-label fw-semibold">Nama Kategori *</label><input name="name" value="{{ old('name', $category->name ?? '') }}" class="form-control" required minlength="3" maxlength="60">@error('name')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-4"><label class="form-label fw-semibold">Deskripsi</label><textarea name="description" rows="3" maxlength="500" class="form-control">{{ old('description', $category->description ?? '') }}</textarea>@error('description')<small class="text-danger">{{ $message }}</small>@enderror</div>
<button class="btn btn-primary">Simpan Kategori</button> <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Batal</a>

</form></div>
@endsection
