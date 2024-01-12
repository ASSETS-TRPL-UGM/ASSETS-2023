@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/notfound.css') }}">
@endsection

<body>
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
        <img src="../assets/image/404.png" alt="" width="400" height="auto"class="d-inline-block">
        <p class="type-1">Page Not Found</p>
        <p class="type-2">The page you're looking temporary unavailable</p>
        <img class="corner-top" src="../assets/image/top.png" alt="" width="200" height="auto">
        <img class="corner-bottom" src="../assets/image/bottom.png" alt="" width="200" height="auto">
        <div class="button-container">
            <button class="button" onclick="window.location.href='/'">Go to Home</button>
        </div>
    </div>

        {{-- <div class="position-absolute z-1">

        </div> --}}
        <div class="d-flex align-items-center justify-content-center vh-100 section-notfound">
            <div class="text-center">
                <img src="{{getAssetDir('assets/image/sumiati.jpg')}}" alt="photo" width="120" >
                <h2 class="display-1 fw-bold">404</h2>
                <p class="fs-3"> <span class="text-danger">Oops!</span> Page not found</p>
                <p class="lead">
                    Bali o mas dolanmu kadohen
                </p>
                <a href="/" class="btn btn-success">Go To Home Page</a>
            </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
</body>
</html>


