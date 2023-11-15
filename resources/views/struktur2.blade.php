
@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/struktur2.css') }}">
@endsection

<body style="overflow-x: hidden">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ps-lg-5 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ getAssetDir('assets/image/logo.jpg') }}" alt="" width="120" height="24"
                        class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#struktur">Struktur Organisasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visi">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lokasi">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeri">Galeri</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Vote
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/livecount">Live Count</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal">Voting</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
    <section id="struktur">
        <div class="container">
            <div class="struktur-title judul  border-top-0 mt-5">
                <p class="text-center fw-bold">Struktur Organisasi ASSETS</p>
                <div class="justify-content-center">
                    <p class="text-center fw-bold judul">
                        Kabinet
                    </p>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img class=""
                            src="{{ getAssetDir('./assets/image/orion.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="visi" class="container-fluid">
        <div class="p-4 p-md-5 mb-4 text-white rounded visi">
            <div class="text-center">
                <h6 class="fw-bold tentang">
                    Tentang
                </h6>
            </div>

            <div>
                <div class="container-fluid py-5">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <button type="button" class="btn-visi mb-3">Visi</button>
                        
                            <p>Menjadikan assets sebagai wadah atau jembatan bagi para mahasiswa TRPL untuk
                                memberikan aspirasinya dengan mengedepankan elemen kekeluargaan, keilmuan, kreatif,
                                kolaboratif, dan inovatif untuk menciptakan assets yang bergelora.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ getAssetDir('./assets/image/heroimg.png') }}"
                                class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto img-reveal"
                                alt="Image of about" width="359" height="auto" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid misi">
                <div class="text-center">
                    <button type="button" class="btn-visi mb-3">Misi</button>
                </div>
                <ol>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                        minima
                        natus aspernatur maiores ipsam numquam quasi? Officia eveniet enim
                        magni!
                    </li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis
                        sequi,
                        nostrum cum eos saepe voluptatem.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, in.
                    </li>
                </ol>
            </div>
        </div>
    </section>

</div>
