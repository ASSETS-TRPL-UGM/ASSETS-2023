<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Struktur Organisasi ASSETS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ getAssetDir('assets/style/mystyle.css') }}">
    <link rel="stylesheet" href="{{ getAssetDir('assets/style/nextpage.css') }}">
</head>

<body>
    <header>
        <nav class="navbar bg-white fixed-top">
            <div class="container-fluid navbar1">
                <a class="navbar-brand text-success" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                    Kembali
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ getAssetDir('assets/image/logo.png') }}" alt="" width="120" height="24"
                        class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <section id="struktur">
                <div class="row featurette mt-5 mb-5 img-reveal">
                    <div class="col-md-6 mb-5 ">
                        <img src="{{ getAssetDir('assets/image/Team spirit.png') }}"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto gambar"
                            alt="Image of about" width="auto" height="500" loading="lazy">
                    </div>

                    <div class="col-md-6 order-md-2">
                        <div class="struktur">
                            <h6 class="fw-bold text-success struktur judul">
                                &mdash;&mdash; 
                                STRUKTUR ORGANISASI
                            </h6>
                            <h1 class="display-5 fw-bold lh-1 mb-3 subjudul">
                                Yuk kenali struktur organisasi di ASSETS
                            </h1>
                            <p class="lead fst-italic konten">ASSETS memiliki 5 divisi, yaitu Humas, PSDM, Kreatif, Kastrad, dan
                                Minkat</p>
                        </div>    
                    </div>
                </div>
            </section>


            <div class="d-flex justify-content-center awalan">
                <img src="{{ getAssetDir('assets/image/struktur.png') }}" class="img-fluid awalan img-struktur" alt="Responsive image">
                
            </div>

            <!-- <div class="d-flex justify-content-center mt-3 awalan">
                <button class="btn btn-success button1" type="button">
                    <a href="#" class="vote">
                        Lihat Gambar
                    </a> 
                </button>
            </div> -->
            @include('components.footer')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>
</html>