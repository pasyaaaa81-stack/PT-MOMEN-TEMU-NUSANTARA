@extends('layouts.app')
@section('content')
<div class="container-fluid"><div class="row">
    <aside class="col-md-3 col-lg-2 admin-sidebar p-3">
        <div class="fw-bold fs-5 px-3 py-3">MTN Admin</div>
        <div class="small text-white-50 px-3 mb-2">MENU UTAMA</div>
        <a href="{{ route('admin.dashboard') }}">▦ &nbsp; Dashboard</a>
        <a href="{{ route('admin.products.index') }}">▣ &nbsp; Data Produk</a>
        <a href="{{ route('admin.categories.index') }}">▤ &nbsp; Kategori</a>
        <a href="{{ route('home') }}">↗ &nbsp; Lihat Website</a>
        <form method="POST" action="{{ route('admin.logout') }}" class="mt-4 px-2">@csrf<button class="btn btn-outline-light w-100">Keluar</button></form>
    </aside>
    <main class="col-md-9 col-lg-10 p-4 p-lg-5 bg-light" style="min-height:70vh">
        @if($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
        @yield('admin-content')
    </main>
</div></div>
@endsection
