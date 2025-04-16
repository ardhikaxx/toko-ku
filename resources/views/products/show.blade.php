@extends('layouts.app')

@section('title', $product->name)

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($product->name, 20) }}</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold">Detail Produk</h6>
        <div>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary me-1">
                <i class="bi bi-pencil me-1"></i> Edit
            </a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                    <i class="bi bi-trash me-1"></i> Hapus
                </button>
            </form>
        </div>
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5">
                <div class="img-placeholder rounded mb-4" style="height: 300px;">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" 
                             style="max-height: 300px; width: auto;" alt="{{ $product->name }}">
                    @else
                        <i class="bi bi-image" style="font-size: 4rem;"></i>
                        <p class="text-muted mt-2">Tidak ada gambar</p>
                    @endif
                </div>
                
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold">Informasi Singkat</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Kategori</h6>
                            <p class="mb-0">
                                <span class="badge bg-primary">
                                    {{ $product->category->name }}
                                </span>
                            </p>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Harga</h6>
                            <h4 class="text-primary rupiah-format">{{ $product->price }}</h4>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Status Stok</h6>
                            <span class="badge bg-{{ $product->stock > 10 ? 'success' : ($product->stock > 0 ? 'warning' : 'danger') }}">
                                {{ $product->stock > 0 ? $product->stock . ' Tersedia' : 'Stok Habis' }}
                            </span>
                        </div>
                        
                        <div>
                            <h6 class="text-muted mb-1">Kode Produk</h6>
                            <p class="mb-0">{{ $product->id }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <h2 class="mb-3">{{ $product->name }}</h2>
                
                <div class="mb-4">
                    <h5 class="text-muted mb-3">Deskripsi</h5>
                    <div class="bg-light p-3 rounded">
                        <p class="mb-0 text-justify">{{ $product->description }}</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 hover-shadow">
                            <div class="card-body">
                                <h6 class="text-muted mb-3">
                                    <i class="bi bi-calendar me-2"></i> Dibuat Pada
                                </h6>
                                <p class="mb-1">
                                    {{ $product->created_at->translatedFormat('d F Y') }}
                                </p>
                                <small class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 hover-shadow">
                            <div class="card-body">
                                <h6 class="text-muted mb-3">
                                    <i class="bi bi-calendar-check me-2"></i> Terakhir Diupdate
                                </h6>
                                <p class="mb-1">
                                    {{ $product->updated_at->translatedFormat('d F Y') }}
                                </p>
                                <small class="text-muted">{{ $product->updated_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Kembali ke Produk
                    </a>
                    <a href="{{ route('products.by_category', $product->category_id) }}" class="btn btn-outline-primary ms-2">
                        <i class="bi bi-collection me-1"></i> Lihat Produk Sejenis
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection