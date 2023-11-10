
@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/notfound.css') }}">
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


    <div class="notfound justify-content-center">
        <p class="type-1">404</p>
        <p class="type-2">Page Not Found</p>
        <p class="type-3">The page you're looking temporary unavailable</p>
        <div class="button-container">
            <button class="button" onclick="window.location.href='/'">Go to Home</button>
        </div>
    </div>