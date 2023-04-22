<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIpemeru</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landingpage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landingpage/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landingpage/css/style.css')}}" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Majene, Sulbar</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>admin@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">SI<span class="text-secondary">pemeru</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#home" class="nav-item nav-link">Beranda</a>
                    <a href="#about" class="nav-item nav-link">Tentang</a>
                    <a href="#room" class="nav-item nav-link">Ruangan</a>
                    <a href="#loan" class="nav-item nav-link">Peminjaman</a>
                    <div class="mt-3">
                        @if (Auth::user())
                            <a class="btn btn-dark" href="{{ route('home') }}">Dashboard</a>
                        @else
                            <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        @endif
                    </div>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <section id="home">
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('landingpage/img/home-1.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 mb-5 animated slideInDown">Sistem informasi peminjaman ruangan</h1>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Ruangan</a>
                                        <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Peminjaman</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('landingpage/img/home-2.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 mb-5 animated slideInDown">Minjam ruangan sekarang lebih mudah</h1>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Ruangan</a>
                                        <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Peminjaman</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Carousel End -->


    <!-- About Start -->
    <section id="about">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="{{ asset('landingpage/img/about-1.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 mb-4">Sistem informasi peminjaman ruangan</h1>
                        <p class="mb-4">Sistem informasi peminjaman ruangan adalah suatu sistem yang digunakan untuk mengatur dan memfasilitasi proses peminjaman ruangan yang diterapkan di Universitas Sulawesi Barat.</p>
                        <p class="mb-4">Beberapa keuntungan dari sistem informasi peminjaman ruangan antara lain :</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Meningkatkan efisiensi dan efektivitas penggunaan ruangan</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Menghindari konflik jadwal</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Mengurangi beban administrasi</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Meningkatkan transparansi terkait peminjaman ruangan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Feature Start -->
    <section id="room">
        <div class="container-fluid bg-light bg-icon my-5 py-6">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Daftar Ruangan</h1>
                    <p>Cek jadwal peminjaman sebelum meminjam ruangan</p>
                </div>
                <div class="row g-4">
                    @foreach ($rooms as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4 rounded" src="{{asset('storage/' . $item->image)}}" width="1080px" alt="">
                            <h4 class="mb-3">{{$item->name}}</h4>
                            <p class="mb-2"><b> Kapasitas : </b> {{$item->capacity}} Orang</p>
                            <p class="mb-2"><b> Fasilitas : </b> {{$item->facility}}</p>
                            <p> <b> Format surat : </b> <a class="btn btn-outline-primary" href="{{ asset('storage/'.$item->format) }}">Download</a></p>
                            
                            <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="#form">Pinjam sekarang</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section id="form">
        <div class="container-fluid bg-light bg-icon my-5 py-6">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">form peminjaman</h1>
                    <p>isi form untuk melakukan peminjaman</p>
                </div>

                <div class="row g-5 justify-content-center">
                    <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <form action="{{ route('lp-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nim" class="form-label">NIM :</label>
                                    <input name="nim" type="text" class="form-control">

                                    @error('nim')
                                    <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Peminjam :</label>
                                    <input name="name" type="text" class="form-control" >

                                    @error('name')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="prodi" class="form-label">Program studi :</label> <br>
                                    <select name="prodi">
                                        <option>teknik informatika</option>
                                        <option>teknik sipil</option>
                                        <option>teknik perencanaan wilayah & kota</option>
                                    </select>

                                    @error('prodi')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">No handphone :</label>
                                    <input name="phone" type="text" class="form-control">

                                    @error('phone')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Alamat :</label>
                                    <input name="address" type="text" class="form-control">

                                    @error('address')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="room_id" class="form-label">Nama Ruangan :</label>
                                    <select class="form-control" name="room_id">
                                        <option label="Pilih Ruangan"></option>
                                        @foreach ($rooms as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('room_id')
                                    <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="program" class="form-label">Acara :</label>
                                    <input name="program" type="text" class="form-control">

                                    @error('program')
                                    <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="letter" class="form-label">Scan surat :</label>
                                    <input name="letter" type="file" class="form-control" >

                                    @error('letter')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="start_date" class="form-label">Tanggal mulai :</label>
                                    <input name="start_date" type="datetime-local" class="form-control">

                                    @error('start_date')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="end_date" class="form-label">Tanggal selesai :</label>
                                    <input name="end_date" type="datetime-local" class="form-control">

                                    @error('end_date')
                                    <span class="text-danger">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">lapor peminjaman</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->


    <!-- Product Start -->
    <section id="loan">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                            <h1 class="display-5 mb-3">Our Products</h1>
                            <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <h1>test</h1>
                    <div id="calendar"></div>
                    
                    {{-- @push('scripts')
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var calendarEl = document.getElementById('calendar');

                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    initialView: 'dayGridMonth',
                                    headerToolbar: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                                    },
                                    events: [
                                        @foreach($loans as $event)
                                        {
                                            title: '{{ $event->name }}',
                                            start: '{{ $event->start_date }}',
                                            end: '{{ $event->end_date }}',
                                        },
                                        @endforeach
                                    ]
                                });

                                calendar.render();
                            });
                        </script>
                    @endpush --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product End -->

{{-- 
    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{ asset('landingpage/img/testimonial-1.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{ asset('landingpage/img/testimonial-2.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{ asset('landingpage/img/testimonial-3.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{ asset('landingpage/img/testimonial-4.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('landingpage/img/blog-1.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('landingpage/img/blog-2.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('landingpage/img/blog-3.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End --> --}}

    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">SI<span class="text-secondary">pemeru</span></h1>
                    <p>Terimakasih Telah Menggunakan Sistem Informasi Peminjaman Ruangan</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">SIpemeru</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="#">Sulkipli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landingpage/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('landingpage/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('landingpage/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('landingpage/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landingpage/js/main.js')}}"></script>

</body>

</html>