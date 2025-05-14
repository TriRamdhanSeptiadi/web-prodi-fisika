@extends('layouts.app')

@section('content')
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
@endsection