<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Fisika - Beranda</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('images/Iwu.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('demos/hosting/hosting.css')}}" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        <!-- start header --> 
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark cover-background" style="background-color: #1565C0; padding-top: 10px; padding-bottom: 10px;">
                <div class="container-fluid">
                    <div class="row align-items-center m-0">
                        <div class="col-6 d-flex align-items-center">
                            <a href="#" class="text-white me-3">
                                <img src="images/flag-id.png" alt="IDN" width="20"> IDN
                            </a>
                            <a href="#" class="text-white me-3">
                                <img src="images/flag-uk.png" alt="ENG" width="20"> ENG
                            </a>
                            <a href="#" class="text-white">
                                <img src="images/flag-kr.png" alt="KR" width="20"> KR
                            </a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="https://elearning.iwu.ac.id/" class="text-white me-3">
                                <i class="bi bi-person"></i> LMS IWU
                            </a>
                            <a href="https://siakad.iwu.ac.id/login" class="text-white me-3">
                                <i class="bi bi-bookmark-check"></i> Dashboard Mahasiswa
                            </a>
                            <a href="https://pmb.iwu.ac.id/" class="text-white">
                                <i class="bi bi-person-fill"></i> PMB IWU
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="images/Iwu.png" data-at2x="images/Iwu.png" alt="Logo" class="default-logo">
                        <span class="brand-text text-black">Fisika</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                        <ul class="navbar-nav text-center"> 
                            <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/tentang" class="nav-link">Tentang Kami</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/tentang"><i class="bi bi-info-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Tentang Fisika</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/visi-misi-tujuan"><i class="bi bi-flag"></i>
                                            <div class="submenu-icon-content">
                                                <span>Visi, Misi dan Tujuan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/struktur-organisasi"><i class="bi bi-diagram-3"></i>
                                            <div class="submenu-icon-content">
                                                <span>Struktur Organisasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/fasilitas"><i class="bi bi-house-door"></i>
                                            <div class="submenu-icon-content">
                                                <span>Fasilitas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/dosen"><i class="bi bi-person-fill"></i>
                                            <div class="submenu-icon-content">
                                                <span>Dosen</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/akreditasi"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Akreditasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/karir"><i class="bi bi-briefcase"></i>
                                            <div class="submenu-icon-content">
                                                <span>Karir</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/kurikulum" class="nav-link">Akademik</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/kurikulum"><i class="bi bi-journal-bookmark"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kurikulum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/profil-lulusan"><i class="bi bi-person-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Profil Lulusan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/artikel" class="nav-link">Publikasi</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/artikel"><i class="bi bi-journal"></i>
                                            <div class="submenu-icon-content">
                                                <span>Artikel</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/berita"><i class="bi bi-newspaper"></i>
                                            <div class="submenu-icon-content">
                                                <span>Berita</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kegiatan"><i class="bi bi-calendar-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kegiatan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="https://pmb.iwu.ac.id/" class="nav-link">Daftar Sekarang</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="https://pmb.iwu.ac.id/"><i class="bi bi-pencil-square"></i>
                                            <div class="submenu-icon-content">
                                                <span>Pendaftaran</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/jadwal-penerimaan"><i class="bi bi-calendar-event"></i>
                                            <div class="submenu-icon-content">
                                                <span>Jadwal Penerimaan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/persyaratan-masuk"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Persyaratan Masuk</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header --> 
        <!-- start page title -->
        <div style="max-width: 1200px; margin: 0 auto; padding-left: 15px; padding-right: 15px;">
            <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
                data-parallax-background-ratio="0.5"
                style="background-image: url('{{ asset('images/example2.png') }}'); background-size: cover; background-position: center; min-height: 300px; border-radius: 12px;">
                
                <div class="opacity-extra-medium" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            
                            <h1 class="m-auto"
                                style="
                                    color: white;
                                    font-family: 'Helvetica Neue', sans-serif;
                                    font-weight: 700;
                                    font-size: 48px;
                                    letter-spacing: 2px;
                                    text-transform: uppercase;
                                    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                                    line-height: 1.2;
                                    transition: transform 0.3s ease, opacity 0.3s ease;
                                ">
                                Fisika
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end page title -->
        <!-- start start -->
        <section class="pb-0 position-relative">
            <div class="container">
                <div class="row align-items-center" id="down-section">
                    <div class="col-lg-5 lg-mb-45px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font fw-400 text-dark-gray ls-minus-1px">Tentang Program Studi Fisika</h2>
                        @if ($tentang && $tentang->deskripsi)
                            <p class="w-90 mb-30px xl-w-100">{!! Str::before($tentang->deskripsi, '</p>') . '</p>' !!}</p>   
                            <a href="/tentang" class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                        @endif
                    </div>
                    <div class="col-lg-6 position-relative align-self-end offset-lg-1 text-center">                        
                        <figure class="m-0">
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0" style="margin-top: 100px;"> 
            <div class="container">
                <h2 class="alt-font fw-400 text-dark-gray ls-minus-1px">Visi, Misi dan Tujuan</h2>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 m-0 justify-content-center" data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start process step item -->
                    <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                        <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                            <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">01</div>
                        </div>
                        <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Visi</span>
                        <div class="position-relative pb-60px last-paragraph-no-margin">
                            @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                            <p class="lh-30 w-90 sm-w-100">{!! $visiMisiTujuan->visi !!}</p>
                            @endif
                            <a href="{{ url('/visi-misi-tujuan?tab=visi') }}" class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                        </div>
                    </div>
                    <!-- end process step item --> 
                    <!-- start process step item -->
                    <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                        <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                            <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">02</div>
                        </div>
                        <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Misi</span>
                        <div class="position-relative pb-60px last-paragraph-no-margin">
                            @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                            <p class="lh-30 w-90 sm-w-100">{!! $visiMisiTujuan->misi[0]['text'] !!}</p>
                            @endif
                            <a href="{{ url('/visi-misi-tujuan?tab=misi') }}" class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                        </div>
                    </div>
                    <!-- end process step item --> 
                    <!-- start process step item -->
                    <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                        <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                            <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">03</div>
                        </div>
                        <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Tujuan</span>
                        <div class="position-relative pb-60px last-paragraph-no-margin">
                            @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                            <p class="lh-30 w-90 sm-w-100">{!! $visiMisiTujuan->tujuan[0]['text'] !!}</p>
                            @endif
                            <a href="{{ url('/visi-misi-tujuan?tab=tujuan') }}" class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                        </div>
                    </div>
                    <!-- end process step item --> 
                </div> 
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 md-pt-50px position-relative">
            <div class="container">
                <h2 class="alt-font fw-400 text-dark-gray ls-minus-1px">Kata Sambutan</h2>
                <div class="row align-items-center position-relative">
                    <!-- Kolom Gambar -->
                    <div class="col-lg-5 ms-10">
                        @if ($pimpinanStaff && $pimpinanStaff->foto)
                        <div class="image-container" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                            <img 
                                src="{{ asset('storage/' . $pimpinanStaff->foto) }}"
                                alt="Foto Pimpinan"
                                class="img-fluid rounded"
                                style="max-width: 250px;"
                            >
                        </div>
                        @endif
                    </div>
                    <!-- Kolom Teks -->
                    <div class="col-lg-5 content-container" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50 }'>
                        @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                        <p class="section-text">
                            {!! Str::before($pimpinanStaff->kata_sambutan, '</p>') . '</p>' !!}
                        </p>
                        @endif
                        <div class="section-text fs-18 text-dark-gray mt-5px mb-10px">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                            <span class="fw-600">{!! $pimpinanStaff->nama !!},</span> {!! $pimpinanStaff->status !!}
                            @endif
                        </div>
                        <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                        <h2 class="alt-font fw-400 text-dark-gray ls-minus-1px">Berita Terbaru</h2>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="/berita" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Jelajahi Semua Berita</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="bg-gradient-aztec-green position-relative">
            <div class="position-absolute left-minus-100px top-25px">
                <img src="{{asset('images/demo-elearning-bg-05.png')}}" alt="" class="w-80">
            </div>
            <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('images/vertical-line-bg-small.svg')"></div>
            <div class="container overlap-section">
            </div>
            <div class="container footer-dark text-center text-sm-start position-relative"> 
                <div class="row mb-0 sm-mb-7 xs-mb-30px justify-content-center">
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px"> 
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Kontak</span>
                        <ul>
                            <li><a href="demo-elearning-courses.html" class="fs-14"><i class="feather icon-feather-phone-call"></i> (022) 6019845</a></li>
                            <li><a href="demo-elearning-courses.html" class="fs-14"><i class="feather icon-feather-mail"></i> info@iwu.ac.id</a></li>
                            <li><a href="https://maps.app.goo.gl/8m6fkLFbxay8rRAV8" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 1: Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</a></li>
                            <li><a href="https://maps.app.goo.gl/XzVxzyqVsKZWTv5N6" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 2: Jl. Raya Gading Tutuka No.18, Cingcin, Kec. Soreang, Kabupaten Bandung, Jawa Barat 40911</a></li>
                            <li><a href="https://maps.app.goo.gl/e2J91drbB2esKqHeA" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 3: Jl. Raya Soreang - Banjaran No.27 Km 2, Tanjungsari, Kec. Cangkuang, Kabupaten Bandung, Jawa Barat 40238</a></li>
                            <li><a href="https://maps.app.goo.gl/LSpLoHomb3FbMW3H8" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 4: Jl. Sukasenang Raya, Cibogo, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391</a></li>
                            <li><a href="https://maps.app.goo.gl/cPstzHGRWwy63zBB6" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 5: Jl. PDAM No. 27 Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40163</a></li>
                        </ul> 
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin xs-mb-30px"> 
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Situs Terkait</span>
                        <ul>
                            <li><a href="https://elearning.iwu.ac.id/" class="fs-14"><i class="feather icon-feather-chevron-right"></i> LMS IWU</a></li>
                            <li><a href="https://siakad.iwu.ac.id/login" class="fs-14"><i class="feather icon-feather-chevron-right"></i> Dashboard Mahasiswa</a></li>
                            <li><a href="https://pmb.iwu.ac.id/" class="fs-14"><i class="feather icon-feather-chevron-right"></i> PMB IWU</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-12 col-sm-6 text-md-center text-lg-start">
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Media Sosial</span>
                        <ul>
                            <li><a href="https://www.instagram.com/iwuidn/" class="fs-14"><i class="feather icon-feather-instagram"></i> iwuidn</a></li>
                            <li><a href="https://www.youtube.com/@iwuchannel" class="fs-14"><i class="feather icon-feather-youtube"></i> IWU CHANNEL OFFICIAL</a></li>
                            <li><a href="https://www.facebook.com/IWUIndonesia/?_rdc=1&_rdr#" class="fs-14"><i class="feather icon-feather-facebook"></i> International Women University</a></li>
                            <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fiwuindonesia" class="fs-14"><i class="feather icon-feather-twitter"></i> Twitter</a></li>
                        </ul> 
                    </div>
                    <!-- end footer column -->
                </div> 
                <div class="row align-items-center footer-bottom border-top border-color-transparent-white-light pt-30px g-0">
                    <!-- start copyright -->
                    <div class="col-xl-12 d-flex justify-content-center align-items-center">
                        <p class="fs-16">&copy; 2025 International Women University</p>
                    </div>
                    <!-- end copyright -->
                </div>
            </div> 
        </footer>
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll to top</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script> 
    </body>
</html>