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
            <section id="footer">
                <div class="container footer">
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        <div class="col d-flex align-items-start">
                            <div>
                                <a class="navbar-brand" href="#">
                                    <img src="{{ getAssetDir('assets/image/logo.png') }}" alt="" width="120" height="24"
                                        class="d-inline-block align-text-top">
                                </a>
                                <p class="assets-footer">
                                    ASSETS singkatan dari Association of Software Engineering Technology yang merupakan
                                    organisasi himpunan mahasiswa Teknologi Rekayasa Perangkat Lunak Sekolah Vokasi Universitas
                                    Gadjah Mada.
                                </p>
        
                                <table style="width:100%">
                                    <tr>
                                        <th><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-telephone text-success" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg></th>
                                        <th>
                                            <div class="fw-lighter">Tel: </div>
                                            <div class="fw-bold">310-437-2766</div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ getAssetDir('assets/image/email.png') }}" alt="" srcset="" width="25" height="25">
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="fw-lighter">Mail: </div>
                                            <div class="fw-bold">assets.ugm@gmail.com</div>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-geo-alt text-success" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="fw-lighter">Address: </div>
                                            <div class="fw-bold">Special Region of Yogyakarta</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                        </div>
                        <div class="col d-flex align-items-start">
                            <div class="col d-flex align-items-start">
                                <div>
                                    <div class="fw-bold">Sosial Media</div>
                                    <div class="fw-normal mb-4">Ayo kepoin sosial media kami untuk informasi-informasi terbaru
                                        seputar kuliah</div>
        
                                        <a href="https://www.youtube.com/channel/UCGshuHma27IGru9yCR2uLng">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M83.94406,30.96c-22.70938,0 -44.03469,1.72 -55.38938,4.12531c-7.56531,1.72 -14.10937,6.88 -15.48,14.79469c-1.37062,8.25063 -2.75469,20.64 -2.75469,36.12c0,15.48 1.37063,27.52 3.09063,36.12c1.38406,7.56531 7.91469,13.07469 15.48,14.79469c12.05344,2.40531 32.68,4.12531 55.38937,4.12531c22.70938,0 43.33594,-1.72 55.37594,-4.12531c7.57875,-1.72 14.10938,-6.88 15.48,-14.79469c1.38406,-8.6 3.10406,-20.97594 3.44,-36.45594c0,-15.48 -1.72,-27.86938 -3.44,-36.46938c-1.37062,-7.56531 -7.90125,-13.07469 -15.48,-14.79469c-12.04,-1.72 -33.01594,-3.44 -55.71187,-3.44zM83.94406,37.84c24.76531,0 44.70656,2.05594 54.34125,3.77594c5.16,1.38406 9.28531,4.82406 9.97062,9.29875c2.06938,11.00531 3.44,22.70938 3.44,34.74938c-0.33594,14.78125 -2.05594,26.82125 -3.44,35.42125c-1.02125,6.53062 -7.90125,8.6 -9.97062,9.29875c-12.38938,2.40531 -33.02938,4.11187 -53.66938,4.11187c-20.64,0 -41.61594,-1.37062 -53.65594,-4.11187c-5.16,-1.38406 -9.28531,-4.82406 -9.97062,-9.29875c-2.75469,-9.63469 -3.78938,-22.36 -3.78938,-35.08531c0,-15.82937 1.38406,-27.52 2.75469,-34.73594c1.03469,-6.54406 8.25063,-8.61344 9.97063,-9.29875c11.35469,-2.40531 32.34406,-4.12531 54.01875,-4.12531zM65.36,58.48v55.04l48.16,-27.52zM72.24,70.18406l27.52,15.81594l-27.52,15.81594z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/assets_ugm/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M55.04,10.32c-24.65626,0 -44.72,20.06374 -44.72,44.72v61.92c0,24.65626 20.06374,44.72 44.72,44.72h61.92c24.65626,0 44.72,-20.06374 44.72,-44.72v-61.92c0,-24.65626 -20.06374,-44.72 -44.72,-44.72zM55.04,17.2h61.92c20.9375,0 37.84,16.9025 37.84,37.84v61.92c0,20.9375 -16.9025,37.84 -37.84,37.84h-61.92c-20.9375,0 -37.84,-16.9025 -37.84,-37.84v-61.92c0,-20.9375 16.9025,-37.84 37.84,-37.84zM127.28,37.84c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c3.79972,0 6.88,-3.08028 6.88,-6.88c0,-3.79972 -3.08028,-6.88 -6.88,-6.88zM86,48.16c-20.85771,0 -37.84,16.98229 -37.84,37.84c0,20.85771 16.98229,37.84 37.84,37.84c20.85771,0 37.84,-16.98229 37.84,-37.84c0,-20.85771 -16.98229,-37.84 -37.84,-37.84zM86,55.04c17.13948,0 30.96,13.82052 30.96,30.96c0,17.13948 -13.82052,30.96 -30.96,30.96c-17.13948,0 -30.96,-13.82052 -30.96,-30.96c0,-17.13948 13.82052,-30.96 30.96,-30.96z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://twitter.com/assets_ugm">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M117.7125,18.8125c-20.57281,0 -37.3025,16.72969 -37.3025,37.3025c0,1.23625 0.30906,2.44563 0.43,3.655c-25.43719,-2.43219 -47.93156,-14.68719 -63.21,-33.4325c-0.71219,-0.90031 -1.81406,-1.38406 -2.96969,-1.30344c-1.14219,0.08062 -2.16344,0.73906 -2.72781,1.73344c-3.21156,5.52281 -5.0525,11.87875 -5.0525,18.705c0,8.26406 2.95625,15.82938 7.525,22.0375c-0.88687,-0.38969 -1.85437,-0.60469 -2.6875,-1.075c-1.06156,-0.56437 -2.33812,-0.5375 -3.37281,0.08063c-1.03469,0.61812 -1.66625,1.73344 -1.67969,2.92937v0.43c0,12.67156 6.5575,23.67688 16.2325,30.4225c-0.1075,-0.01344 -0.215,0.02688 -0.3225,0c-1.1825,-0.20156 -2.37844,0.215 -3.17125,1.11531c-0.79281,0.90031 -1.04812,2.15 -0.69875,3.29219c3.84313,11.94594 13.6525,21.07 25.8,24.4025c-9.675,5.75125 -20.89531,9.1375 -33.0025,9.1375c-2.62031,0 -5.13312,-0.13437 -7.6325,-0.43c-1.6125,-0.215 -3.15781,0.72563 -3.69531,2.2575c-0.55094,1.53188 0.05375,3.23844 1.43781,4.085c15.52031,9.95719 33.94313,15.8025 53.75,15.8025c32.10219,0 57.28406,-13.41062 74.175,-32.5725c16.89094,-19.16187 25.6925,-44.04812 25.6925,-67.295c0,-0.98094 -0.08062,-1.935 -0.1075,-2.9025c6.30219,-4.82406 11.9325,-10.48125 16.34,-17.0925c0.87344,-1.27656 0.77938,-2.98312 -0.22844,-4.16562c-0.99438,-1.1825 -2.67406,-1.54531 -4.07156,-0.88688c-1.77375,0.79281 -3.84312,0.87344 -5.6975,1.505c2.44563,-3.26531 4.54188,-6.78594 5.805,-10.75c0.43,-1.35719 -0.04031,-2.84875 -1.15562,-3.73562c-1.11531,-0.87344 -2.67406,-0.98094 -3.89688,-0.24188c-5.87219,3.48031 -12.37594,5.92594 -19.2425,7.4175c-6.665,-6.235 -15.43969,-10.4275 -25.2625,-10.4275zM117.7125,25.6925c8.77469,0 16.70281,3.74906 22.2525,9.675c0.83313,0.86 2.05594,1.22281 3.225,0.9675c4.48813,-0.88687 8.74781,-2.19031 12.9,-3.87c-2.39187,3.225 -5.34812,5.97969 -8.815,8.0625c-1.57219,0.76594 -2.31125,2.58 -1.73344,4.23281c0.56437,1.63937 2.28437,2.59344 3.99094,2.21719c3.44,-0.41656 6.50375,-1.81406 9.7825,-2.6875c-2.94281,3.18469 -6.16781,6.06031 -9.675,8.6c-0.95406,0.69875 -1.47812,1.8275 -1.3975,3.01c0.05375,1.3975 0.1075,2.78156 0.1075,4.1925c0,21.5 -8.25062,44.84094 -23.9725,62.6725c-15.72187,17.83156 -38.8075,30.315 -69.015,30.315c-13.71969,0 -26.67344,-3.03687 -38.3775,-8.385c14.5125,-1.11531 27.89625,-6.24844 38.7,-14.7275c1.12875,-0.90031 1.57219,-2.40531 1.11531,-3.77594c-0.45688,-1.37063 -1.72,-2.31125 -3.15781,-2.35156c-11.34125,-0.20156 -20.84156,-6.79937 -25.9075,-16.125c0.18813,0 0.34938,0 0.5375,0c3.39969,0 6.75906,-0.43 9.89,-1.29c1.505,-0.44344 2.53969,-1.84094 2.48594,-3.41312c-0.05375,-1.57219 -1.16906,-2.91594 -2.70094,-3.25188c-12.24156,-2.4725 -21.41937,-12.44312 -23.5425,-24.8325c3.46688,1.19594 7.01438,2.13656 10.8575,2.2575c1.57219,0.09406 2.99656,-0.88687 3.48031,-2.37844c0.48375,-1.49156 -0.1075,-3.13094 -1.43781,-3.96406c-8.17,-5.46906 -13.545,-14.78125 -13.545,-25.37c0,-3.92375 1.02125,-7.525 2.365,-10.965c17.2,18.87969 41.28,31.41688 68.4775,32.7875c1.075,0.05375 2.12313,-0.38969 2.82188,-1.20937c0.69875,-0.83313 0.9675,-1.935 0.72562,-2.98313c-0.52406,-2.23062 -0.86,-4.59562 -0.86,-6.9875c0,-16.85062 13.57188,-30.4225 30.4225,-30.4225z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.linkedin.com/company/association-of-software-engineering-technology-students-ugm/mycompany/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="35" height="35"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#146c43"><path d="M35.83333,21.5c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v100.33333c0,7.91917 6.41417,14.33333 14.33333,14.33333h100.33333c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-100.33333c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM35.83333,35.83333h100.33333v100.33333h-100.33333zM55.75163,45.26758c-6.14183,0 -9.82617,3.69207 -9.82617,8.6084c0,4.91633 3.68479,8.5944 9.21029,8.5944c6.14183,0 9.82617,-3.67807 9.82617,-8.5944c0,-4.91633 -3.68479,-8.6084 -9.21029,-8.6084zM46.41536,71.66667v50.16667h18.08464v-50.16667zM79.42122,71.66667v50.16667h18.08464v-27.4209c0,-8.16283 5.82392,-9.33626 7.57259,-9.33626c1.74867,0 6.42481,1.75393 6.42481,9.33626v27.4209h17.49674v-27.4209c0,-15.74517 -6.99657,-22.74577 -15.74707,-22.74577c-8.7505,0 -13.4179,2.91369 -15.74707,6.99869v-6.99869z"></path></g></g>
                                </svg>
                            </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="{{ getAssetDir('assets/js/main.js') }}"></script>
</body>
</html>