@extends('layouts.app')
@section('title', 'Login Admin')
@section('content')
<div class="container py-5"><div class="row justify-content-center"><div class="col-md-6 col-lg-5">
    <div class="p-4 p-md-5 border rounded-4 shadow-sm">
        <div class="brand-mark mb-3">MTN</div><div class="section-kicker">Area administrator</div><h2 class="fw-bold mt-2">Login Admin</h2><p class="text-secondary">Masuk untuk mengelola katalog produk UMKM.</p>
        @if($errors->any())<div class="alert alert-danger">{{ $errors->first() }}</div>@endif
        <form method="POST" action="{{ route('admin.login.submit') }}">@csrf
            <div class="mb-3"><label class="form-label fw-semibold">Email</label><input type="email" name="email" value="{{ old('email') }}" class="form-control" required maxlength="100">@error('email')<small class="text-danger">{{ $message }}</small>@enderror</div>
            <div class="mb-4"><label class="form-label fw-semibold">Password</label><input type="password" name="password" class="form-control" required minlength="8" maxlength="100">@error('password')<small class="text-danger">{{ $message }}</small>@enderror</div>
            <button class="btn btn-primary w-100">Masuk Dashboard</button>
        </form>
        <div class="small text-secondary mt-3">Akun demo diatur melalui variabel ADMIN_EMAIL dan ADMIN_PASSWORD pada file .env.</div>
    </div>
</div></div></div>
@endsection
