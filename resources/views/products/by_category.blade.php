@extends('layouts.app')

@section('title', 'Produk dalam Kategori ' . $category->name)

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold">
            Produk dalam Kategori <span class="text-primary">{{ $category->name }}</span>
        </h6>
        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Semua Produk
        </a>
    </div>
    
    <div class="card-body">
        @if($products->isEmpty())
            <div class="text-center py-5">
                <i class="bi bi-box-open" style="font-size: 3rem; color: #adb5bd;"></i>
                <h5 class="mt-3 text-muted">Tidak ada produk dalam kategori ini</h5>
                <a href="{{ route('products.create') }}?category_id={{ $category->id }}" class="btn btn-primary mt-3">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Produk Baru
                </a>
            </div>
        @else
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 hover-shadow">
                        <div class="img-placeholder" style="height: 180px;">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" 
                                     style="height: 180px; width: 100%; object-fit: cover;" alt="{{ $product->name }}">
                            @else
                                <i class="bi bi-image" style="font-size: 3rem;"></i>
                            @endif
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($product->name, 25) }}</h5>
                            <p class="card-text text-primary rupiah-format mb-1">{{ $product->price }}</p>
                            <p class="card-text small text-muted mb-2">
                                {{ Str::limit($product->description, 50) }}
                            </p>
                            <span class="badge bg-{{ $product->stock > 0 ? 'success' : 'danger' }}">
                                {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
                            </span>
                        </div>
                        
                        <div class="card-footer bg-transparent">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('products.show', $product->id) }}" 
                                   class="btn btn-sm btn-warning"
                                   data-bs-toggle="tooltip" 
                                   data-bs-placement="top" 
                                   title="Lihat Detail">
                                    <i class="bi bi-eye"></i>
                                </a>
                                
                                <a href="{{ route('products.edit', $product->id) }}" 
                                   class="btn btn-sm btn-primary"
                                   data-bs-toggle="tooltip" 
                                   data-bs-placement="top" 
                                   title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin?')"
                                            data-bs-toggle="tooltip" 
                                            data-bs-placement="top" 
                                            title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($products->hasPages())
            <div class="d-flex justify-content-between mt-4">
                <div class="text-muted">
                    Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }} dari {{ $products->total() }} produk
                </div>
                {{ $products->links() }}
            </div>
            @endif
        @endif
    </div>
</div>

<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Informasi Kategori</h6>
    </div>
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4>{{ $category->name }}</h4>
                <p class="text-muted">{{ $category->description ?? 'Tidak ada deskripsi' }}</p>
                <p class="mb-0">
                    <span class="badge bg-primary">
                        {{ $products->total() }} produk
                    </span>
                </p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="{{ route('products.create') }}?category_id={{ $category->id }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Produk
                </a>
            </div>
        </div>
    </div>
</div>
@endsection