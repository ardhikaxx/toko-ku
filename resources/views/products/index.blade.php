@extends('layouts.app')

@section('title', 'Manajemen Produk')

{{-- @section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
@endsection --}}

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah Baru
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-borderless">
                        <tr class="align-middle">
                            <th>#</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" class="rounded"
                                                    width="50" height="50" alt="{{ $product->name }}">
                                            @else
                                                <div class="rounded img-placeholder" style="width: 50px; height: 50px;">
                                                    <i class="bi bi-image"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <h6 class="mb-0">{{ $product->name }}</h6>
                                            <small class="text-muted">{{ Str::limit($product->description, 30) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $product->category->name }}
                                    </span>
                                </td>
                                <td class="text-center rupiah-format">{{ $product->price }}</td>
                                <td class="text-center">
                                    <span
                                        class="badge stock-badge bg-{{ $product->stock > 10 ? 'success' : ($product->stock > 0 ? 'warning' : 'danger') }}">
                                        {{ $product->stock }} {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="action-btns d-flex gap-2 justify-content-center">
                                        <a href="{{ route('products.show', $product->id) }}"
                                            class="btn btn-sm btn-warning rounded-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Lihat Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-sm btn-primary rounded-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger rounded-1"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    Belum ada produk. <a href="{{ route('products.create') }}">Buat produk pertama</a>.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between mt-4">
                {{ $products->links() }}
            </div>
            
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori Produk</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('products.by_category', $category->id) }}" class="text-decoration-none">
                                    <div class="card h-100 border-start border-primary border-3">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $category->name }}</h5>
                                            <p class="text-muted small">{{ $category->products_count }} produk</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
