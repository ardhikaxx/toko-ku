@extends('layouts.app')

@section('title', 'Edit ' . $product->name)

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produk</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.show', $product->id) }}">{{ Str::limit($product->name, 20) }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Edit Produk</h6>
    </div>
    
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST" id="editProductForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="5" required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="price" class="form-label">Harga <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" value="{{ old('price', $product->price) }}" 
                                       min="100" required>
                            </div>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <label for="stock" class="form-label">Stok <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                   id="stock" name="stock" value="{{ old('stock', $product->stock) }}" 
                                   min="0" required>
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="category_id" class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select class="form-select @error('category_id') is-invalid @enderror" 
                                id="category_id" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold">Gambar Produk</h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="img-placeholder mb-3" id="imagePreview" style="height: 200px; width: 100%;">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" style="max-height: 200px; width: auto;">
                                @else
                                    <i class="bi bi-image" style="font-size: 3rem;"></i>
                                    <p class="small text-muted mt-2">Tidak ada gambar</p>
                                @endif
                            </div>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*" onchange="previewImage(this)">
                            <small class="text-muted">Ukuran disarankan: 800x800px, maks 2MB</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-save me-1"></i> Simpan Perubahan
                        </button>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-1"></i> Batal
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Image preview
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const file = input.files[0];
        const reader = new FileReader();
        
        if (file) {
            reader.onload = function(e) {
                preview.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded" style="max-height: 200px; width: auto;">`;
            }
            reader.readAsDataURL(file);
        }
    }
    
    // Form validation
    document.getElementById('editProductForm').addEventListener('submit', function(e) {
        const price = document.getElementById('price').value;
        const stock = document.getElementById('stock').value;
        
        if (price < 100) {
            alert('Harga minimal Rp 100');
            e.preventDefault();
        }
        
        if (stock < 0) {
            alert('Stok tidak boleh negatif');
            e.preventDefault();
        }
    });
</script>
@endpush