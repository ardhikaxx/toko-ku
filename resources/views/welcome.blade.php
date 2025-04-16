<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di TokoKu</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gradient: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
            color: var(--dark-color);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .hero-section {
            background: var(--gradient);
            color: white;
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0H5.373A5.373 5.373 0 0 0 0 5.373v49.254A5.373 5.373 0 0 0 5.373 60h49.254A5.373 5.373 0 0 0 60 54.627V5.373A5.373 5.373 0 0 0 54.627 0zM6 6h48v48H6V6z' fill='%234361ee' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.2;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .btn-hero {
            background-color: white;
            color: var(--primary-color);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            color: var(--primary-color);
        }
        
        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
        }
        
        .feature-title {
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }
        
        .product-showcase {
            background: linear-gradient(135deg, #f9fafb 0%, #f0f4f8 100%);
            padding: 5rem 0;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 5rem;
            font-family: 'Playfair Display', serif;
            color: rgba(67, 97, 238, 0.1);
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.75rem;
            color: white;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }
        
        .navbar {
            transition: all 0.3s ease;
            padding: 1rem 0;
        }
        
        .navbar.scrolled {
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.75rem;
            color: white;
        }
        
        .navbar.scrolled .navbar-brand {
            color: var(--primary-color);
        }
        
        .nav-link {
            font-weight: 500;
            color: white !important;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled .nav-link {
            color: var(--dark-color) !important;
        }
        
        .nav-link:hover, .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
        }
        
        .navbar.scrolled .nav-link:hover, .navbar.scrolled .nav-link.active {
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary-color) !important;
        }
        
        .btn-nav {
            background: white;
            color: var(--primary-color);
            font-weight: 500;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-nav:hover {
            background: rgba(255, 255, 255, 0.8);
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .navbar.scrolled .btn-nav {
            background: var(--primary-color);
            color: white;
        }
        
        .navbar.scrolled .btn-nav:hover {
            background: var(--secondary-color);
            color: white;
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 15s infinite ease-in-out;
        }
        
        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: -50px;
            right: -50px;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            top: 30%;
            right: 10%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translate(0, 0);
            }
            50% {
                transform: translate(20px, 20px);
            }
        }
        
        .product-card {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            background: white;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .product-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .product-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.25rem;
        }
        
        .btn-explore {
            background: var(--gradient);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.2);
            border: none;
        }
        
        .btn-explore:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(67, 97, 238, 0.3);
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop me-2"></i>TokoKu
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                </ul>
                
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ route('products.index') }}" class="btn btn-nav">
                        <i class="bi bi-box-seam me-1"></i> Lihat Produk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Temukan Produk Terbaik untuk Kebutuhan Anda</h1>
                    <p class="hero-subtitle">TokoKu menyediakan berbagai produk berkualitas tinggi dengan harga terbaik. Mulai belanja sekarang dan dapatkan pengalaman berbelanja yang menyenangkan.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('products.index') }}" class="btn btn-hero">
                            <i class="bi bi-cart me-1"></i> Belanja Sekarang
                        </a>
                        <a href="#produk" class="btn btn-outline-light">
                            <i class="bi bi-eye me-1"></i> Lihat Produk
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" 
                         class="img-fluid rounded-3 shadow-lg" alt="Hero Image" style="transform: perspective(1000px) rotateY(-15deg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 class="feature-title">Pengiriman Cepat</h3>
                        <p>Kami mengirimkan pesanan Anda dengan cepat dan aman ke seluruh Indonesia dalam waktu 1-3 hari kerja.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="feature-title">Produk Berkualitas</h3>
                        <p>Semua produk kami dipilih dengan teliti untuk memastikan kualitas terbaik untuk pelanggan kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3 class="feature-title">Layanan Pelanggan</h3>
                        <p>Tim kami siap membantu Anda 24/7 melalui chat, telepon, atau email untuk semua kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase -->
    <section id="produk" class="product-showcase">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Produk Unggulan Kami</h2>
                <p class="text-muted">Temukan koleksi produk terbaik yang sudah dipilih khusus untuk Anda</p>
            </div>
            
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" 
                                 class="product-img" alt="Smart Watch">
                            <span class="product-badge">Populer</span>
                        </div>
                        <div class="p-3">
                            <h5>Smart Watch Pro</h5>
                            <p class="text-muted small mb-2">Monitor kesehatan & notifikasi cerdas</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 1.299.000</span>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                                 class="product-img" alt="Wireless Headphones">
                            <span class="product-badge">Terbaru</span>
                        </div>
                        <div class="p-3">
                            <h5>Wireless Headphones</h5>
                            <p class="text-muted small mb-2">Suara jernih & baterai tahan lama</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 899.000</span>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 class="product-img" alt="Bluetooth Speaker">
                            <span class="product-badge">Diskon</span>
                        </div>
                        <div class="p-3">
                            <h5>Bluetooth Speaker</h5>
                            <p class="text-muted small mb-2">Suara bass kuat & tahan air</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 650.000</span>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 class="product-img" alt="Running Shoes">
                        </div>
                        <div class="p-3">
                            <h5>Running Shoes Pro</h5>
                            <p class="text-muted small mb-2">Nyaman & ringan untuk aktivitas</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 1.199.000</span>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('products.index') }}" class="btn btn-explore">
                    <i class="bi bi-grid me-1"></i> Lihat Semua Produk
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         class="img-fluid rounded-3 shadow" alt="About Us">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Tentang TokoKu</h2>
                    <p>TokoKu didirikan pada tahun 2020 dengan misi untuk menyediakan produk berkualitas tinggi dengan harga terjangkau bagi pelanggan kami. Kami percaya bahwa setiap orang berhak mendapatkan produk terbaik tanpa harus mengorbankan kualitas.</p>
                    <p>Dengan tim yang berpengalaman dan berdedikasi, kami terus berinovasi untuk memberikan pengalaman berbelanja yang terbaik bagi Anda. Produk kami dipilih dengan cermat dan melalui proses quality control yang ketat sebelum sampai ke tangan Anda.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi bi-info-circle me-1"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimoni" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Apa Kata Pelanggan Kami</h2>
                <p class="text-muted">Testimoni dari pelanggan yang puas dengan layanan kami</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Produk yang saya terima sangat berkualitas dan sesuai dengan deskripsi. Pengiriman juga sangat cepat, hanya 2 hari sudah sampai. Sangat puas berbelanja di TokoKu!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" 
                                 class="rounded-circle me-3" width="50" height="50" alt="Testimonial 1">
                            <div>
                                <h6 class="testimonial-author mb-0">Sarah Wijaya</h6>
                                <small class="text-muted">Pelanggan sejak 2021</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Layanan pelanggan sangat responsif dan membantu. Produk yang saya beli mengalami kerusakan kecil saat pengiriman dan langsung diganti tanpa ribet. Rekomended banget!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" 
                                 class="rounded-circle me-3" width="50" height="50" alt="Testimonial 2">
                            <div>
                                <h6 class="testimonial-author mb-0">Budi Santoso</h6>
                                <small class="text-muted">Pelanggan sejak 2022</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Harga kompetitif dengan kualitas produk yang premium. Saya sudah beberapa kali berbelanja di sini dan selalu puas dengan layanan maupun produknya. Keep it up!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                                 class="rounded-circle me-3" width="50" height="50" alt="Testimonial 3">
                            <div>
                                <h6 class="testimonial-author mb-0">Dewi Lestari</h6>
                                <small class="text-muted">Pelanggan sejak 2020</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: var(--gradient);">
        <div class="container py-5 text-center text-white">
            <h2 class="mb-4">Siap Memulai Belanja Anda?</h2>
            <p class="mb-5" style="max-width: 700px; margin: 0 auto; opacity: 0.9;">Bergabunglah dengan ribuan pelanggan yang sudah merasakan pengalaman berbelanja terbaik di TokoKu. Dapatkan produk berkualitas dengan harga terbaik sekarang juga.</p>
            <a href="{{ route('products.index') }}" class="btn btn-hero">
                <i class="bi bi-cart me-1"></i> Belanja Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="#" class="footer-logo d-inline-block mb-4">
                        <i class="bi bi-shop me-2"></i>TokoKu
                    </a>
                    <p>Toko online terpercaya menyediakan berbagai produk berkualitas dengan harga terbaik. Komitmen kami adalah memberikan pengalaman berbelanja yang menyenangkan dan memuaskan.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Menu</h5>
                        <a href="#">Beranda</a>
                        <a href="#produk">Produk</a>
                        <a href="#tentang">Tentang Kami</a>
                        <a href="#testimoni">Testimoni</a>
                        <a href="#">Kontak</a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Kategori</h5>
                        <a href="#">Elektronik</a>
                        <a href="#">Fashion</a>
                        <a href="#">Rumah Tangga</a>
                        <a href="#">Olahraga</a>
                        <a href="#">Kesehatan</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="footer-links">
                        <h5>Kontak Kami</h5>
                        <p><i class="bi bi-geo-alt me-2"></i> Jl. Merdeka No. 123, Jakarta</p>
                        <p><i class="bi bi-envelope me-2"></i> info@tokoku.com</p>
                        <p><i class="bi bi-phone me-2"></i> +62 812 3456 7890</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2023 TokoKu. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>