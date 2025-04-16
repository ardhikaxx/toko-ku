<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toko Online dengan Laravel">
    <title>Toko Online - @yield('title')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-light: #e6e9ff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --warning-color: #fd7e14;
            --info-color: #17a2b8;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --body-color: #f5f7fa;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        body {
            background-color: var(--body-color);
            font-family: 'Poppins', sans-serif;
            color: #495057;
            line-height: 1.6;
        }
        
        .navbar {
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            font-size: 1.8rem;
            margin-right: 0.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            padding: 0.5rem 1rem !important;
            border-radius: 0.5rem;
            transition: var(--transition);
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
            background-color: var(--primary-light);
        }
        
        .nav-link i {
            margin-right: 0.3rem;
        }
        
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .product-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
            transition: var(--transition);
        }
        
        .img-placeholder {
            background-color: #f1f3f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            flex-direction: column;
            transition: var(--transition);
        }
        
        .img-placeholder:hover {
            background-color: #e9ecef;
        }
        
        .img-placeholder i {
            font-size: 2.5rem;
            opacity: 0.7;
        }
        
        .badge {
            font-weight: 500;
            padding: 0.4em 0.75em;
            font-size: 0.85em;
            border-radius: 0.5rem;
        }
        
        .btn {
            border-radius: 0.5rem;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: var(--transition);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #3a56d5;
            border-color: #3a56d5;
            transform: translateY(-2px);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-sm {
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
        }
        
        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .page-link {
            color: var(--primary-color);
            border-radius: 0.5rem !important;
            margin: 0 0.2rem;
            border: none;
            box-shadow: none !important;
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 0;
            font-size: 0.9rem;
        }
        
        .breadcrumb-item a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary-color);
        }
        
        .breadcrumb-item.active {
            color: var(--dark-color);
            font-weight: 500;
        }
        
        footer {
            background-color: white;
            box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.05);
            margin-top: 3rem;
            padding: 1.5rem 0;
        }
        
        .form-control, .form-select {
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            border: 1px solid #e0e0e0;
            transition: var(--transition);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
        }
        
        .price {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .stock-badge {
            font-size: 0.8rem;
            padding: 0.35em 0.65em;
        }
        
        .action-btns .btn {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border-radius: 50% !important;
        }
        
        .table {
            border-radius: 0.75rem;
            overflow: hidden;
        }
        
        .table thead th {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem;
        }
        
        .table tbody tr {
            transition: var(--transition);
        }
        
        .table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        .table tbody td {
            vertical-align: middle;
            padding: 1rem;
            border-color: rgba(0, 0, 0, 0.05);
        }
        
        .alert {
            border-radius: 0.75rem;
            border: none;
            box-shadow: var(--card-shadow);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border-radius: 0.5rem 0 0 0.5rem !important;
        }
        
        .h-100 {
            height: 100% !important;
        }
        
        .text-justify {
            text-align: justify;
        }
        
        /* Custom utilities */
        .rounded-1 {
            border-radius: 0.5rem !important;
        }
        
        .gap-2 {
            gap: 0.5rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.25rem;
            }
            
            .card-header {
                padding: 1rem;
            }
            
            .table thead {
                display: none;
            }
            
            .table tbody tr {
                display: block;
                margin-bottom: 1rem;
                border-radius: 0.5rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }
            
            .table tbody td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.75rem;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            .table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                margin-right: 1rem;
                color: var(--dark-color);
            }
            
            .action-btns {
                justify-content: center !important;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-shop"></i>
                <span>TokoKu</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products.index') }}">
                            <i class="bi bi-box-seam"></i> Produk
                        </a>
                    </li>
                </ul>
                
                <div class="d-flex">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Produk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mb-5">
        @yield('breadcrumb')
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white py-4 mt-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <span class="text-muted">&copy; {{ date('Y') }} TokoKu. Hak Cipta Dilindungi.</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script for Rupiah Format -->
    <script>
        function formatRupiah(angka) {
            if (!angka) return 'Rp 0';
            angka = parseInt(angka);
            return 'Rp ' + angka.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
        }
        
        // Format all elements with class 'rupiah-format'
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.rupiah-format').forEach(function(element) {
                const value = element.textContent.trim();
                if (value && !isNaN(value)) {
                    element.textContent = formatRupiah(value);
                }
            });
            
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Add responsive table labels
            if (window.innerWidth <= 768) {
                document.querySelectorAll('tbody td').forEach(function(td, index) {
                    const headers = document.querySelectorAll('thead th');
                    if (headers[index]) {
                        td.setAttribute('data-label', headers[index].textContent);
                    }
                });
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>