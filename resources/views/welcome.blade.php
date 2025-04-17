<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoKu - Modern Product Management</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --accent-color: #f72585;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #6c757d;
            --gradient: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: var(--dark-color);
            line-height: 1.7;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        /* Navbar */
        .navbar {
            padding: 1rem 0;
            background: white;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            font-size: 1.8rem;
            margin-right: 0.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.3rem;
            color: var(--dark-color) !important;
            border-radius: 0.5rem;
            transition: var(--transition);
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
            background: rgba(67, 97, 238, 0.1);
        }
        
        .btn-primary {
            background: var(--gradient);
            border: none;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            border-radius: 0.5rem;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }
        
        /* Hero Section */
        .hero-section {
            background: var(--gradient);
            color: white;
            padding: 7rem 0 5rem;
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
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0H5.373A5.373 5.373 0 0 0 0 5.373v49.254A5.373 5.373 0 0 0 5.373 60h49.254A5.373 5.373 0 0 0 60 54.627V5.373A5.373 5.373 0 0 0 54.627 0zM6 6h48v48H6V6z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .hero-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .hero-image {
            border-radius: 1rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateY(-10deg);
            border: 10px solid white;
            transition: var(--transition);
        }
        
        .hero-image:hover {
            transform: perspective(1000px) rotateY(-5deg);
        }
        
        /* Features Section */
        .features-section {
            padding: 5rem 0;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }
        
        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            height: 100%;
            border: none;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.2);
        }
        
        .feature-title {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary-dark);
        }
        
        /* Dashboard Preview */
        .dashboard-preview {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            padding: 5rem 0;
            overflow: hidden;
        }
        
        .dashboard-image {
            border-radius: 1rem;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .dashboard-image:hover {
            transform: scale(1.02);
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-title {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }
        
        .btn-light {
            background: white;
            color: var(--primary-color);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            color: var(--primary-color);
        }
        
        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: white;
            display: inline-block;
            margin-bottom: 1.5rem;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: block;
            margin-bottom: 0.7rem;
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
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        /* Floating Animation */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 5rem 0 3rem;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .cta-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop"></i> TokoKu
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
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dashboard">Dashboard</a>
                    </li>
                </ul>
                
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Masuk Dashboard
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt-5 d-flex flex-column justify-content-center text-align-items-center">
                    <h1 class="hero-title animate__animated animate__fadeInDown">Sistem Manajemen Produk Modern</h1>
                    <p class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">
                        Kelola produk dan kategori toko Anda dengan antarmuka yang intuitif dan powerful. 
                        Dibangun khusus untuk memudahkan operasional bisnis Anda.
                    </p>
                    <div class="d-flex gap-3 animate__animated animate__fadeIn animate__delay-1s">
                        <a href="{{ route('products.index') }}" class="btn btn-light">
                            <i class="bi bi-play-circle me-1"></i> Mulai Sekarang
                        </a>
                        {{-- <a href="#fitur" class="btn btn-outline-light ">
                            <i class="bi bi-info-circle me-1"></i> Pelajari Fitur
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate__animated animate__fadeInRight animate__delay-1s mt-5">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         class="img-fluid hero-image floating" alt="Dashboard Preview">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="features-section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">Fitur Unggulan</h2>
            <p class="text-center text-muted mb-5 animate__animated animate__fadeIn">Manajemen produk lengkap dengan antarmuka modern</p>
            
            <div class="row g-4">
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        <h3 class="feature-title">Tambah Produk</h3>
                        <p>
                            Tambahkan produk baru dengan mudah melalui form yang user-friendly. 
                            Lengkapi informasi nama, deskripsi, harga, stok, dan gambar produk.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-list-ul"></i>
                        </div>
                        <h3 class="feature-title">Kelola Kategori</h3>
                        <p>
                            Buat dan kelola kategori produk untuk mengorganisir inventaris Anda. 
                            Sistem kategori yang fleksibel dan mudah diatur.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h3 class="feature-title">Edit & Hapus</h3>
                        <p>
                            Perbarui informasi produk atau hapus produk yang tidak lagi tersedia. 
                            Operasi CRUD lengkap dengan konfirmasi yang aman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Preview -->
    <section id="dashboard" class="dashboard-preview">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 animate__animated animate__fadeInLeft">
                    <h2 class="section-title text-start">Dashboard Modern</h2>
                    <p class="mb-4">
                        Antarmuka dashboard yang bersih dan intuitif memudahkan Anda mengelola seluruh produk 
                        dalam satu tempat. Dengan desain responsive, akses dari perangkat apapun menjadi mudah.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Tampilan tabel yang informatif</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Navigasi yang sederhana</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Notifikasi operasi berhasil</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Validasi form yang jelas</li>
                    </ul>
                    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">
                        <i class="bi bi-arrow-right me-1"></i> Coba Sekarang
                    </a>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1115&q=80" 
                         class="img-fluid dashboard-image" alt="Dashboard Preview">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title animate__animated animate__fadeIn">Siap Mengelola Produk Anda?</h2>
            <p class="mb-5 animate__animated animate__fadeIn animate__delay-1s">
                Mulai gunakan sistem manajemen produk TokoKu sekarang dan rasakan kemudahannya.
            </p>
            <a href="{{ route('products.index') }}" class="btn btn-light btn-lg animate__animated animate__fadeIn animate__delay-1s">
                <i class="bi bi-rocket me-1"></i> Mulai Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="#" class="footer-logo text-decoration-none">
                        <i class="bi bi-shop me-2"></i>TokoKu
                    </a>
                    <p class="mt-3">
                        Sistem manajemen produk modern dengan antarmuka yang intuitif dan mudah digunakan.
                        Dibangun untuk memenuhi kebutuhan bisnis Anda.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="social-icon text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Menu</h5>
                    <a href="#" class="d-block mb-2 text-white text-decoration-none">Beranda</a>
                    <a href="#fitur" class="d-block mb-2 text-white text-decoration-none">Fitur</a>
                    <a href="#dashboard" class="d-block mb-2 text-white text-decoration-none">Dashboard</a>
                    <a href="{{ route('products.index') }}" class="d-block mb-2 text-white text-decoration-none">Login</a>
                </div>
                
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0 text-white">
                    <h5 class="mb-3">Kontak</h5>
                    <p><i class="bi bi-geo-alt me-2"></i> Jl. Teknologi No. 123, Jakarta</p>
                    <p><i class="bi bi-envelope me-2"></i> hello@tokoku.com</p>
                    <p><i class="bi bi-phone me-2"></i> +62 123 4567 890</p>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h5 class="mb-3">Jam Operasional</h5>
                    <p>Senin - Jumat: 09:00 - 17:00</p>
                    <p>Sabtu: 09:00 - 14:00</p>
                    <p>Minggu: Tutup</p>
                </div>
            </div>
            
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2023 TokoKu. All rights reserved.</p>
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
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate__animated');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    const animationClass = element.classList[1];
                    element.classList.add(animationClass);
                }
            });
        }
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>