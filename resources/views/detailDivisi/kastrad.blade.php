@extends('layouts.orion')
@section('title', 'Kastrad')
@section('content')
    @include('components.navbar')
    <div class="container my-5 mx-auto">
        <div class="row position-relative z-1">
            <div class="col">
                <img src="{{ asset('images/WhatsApp Image 2022-04-14 at 17.32 1.png') }}" class="card-img-top rounded-2"
                    style="max-width:560px; max-height:320px;" alt="...">
            </div>
            <div class="col">
                <div class="container ms-2">
                    <p class="fs-2 text-cream ">Kajian Strategis & Advokasi</p>
                    <p class="text-white">Divisi KASTRAD merupakan kepanjangan dari Divisi Kajian Strategis
                        dan Advokasi. Divisi ini mewadahi aspirasi mahasiswa TRPL, serta
                        mengkomunikasikan hasil kajian dan isu penting dalam pengambilan
                        kebijakan prodi maupun departemen. Selain itu, Kastrad juga bertugas
                        membantu menyambut mahasiswa baru.</p>
                    <a name="" id="" class="btn bg-cream" href="#" role="button">Read More</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/Orange.svg') }}" class=" position-absolute z-0">
    </div>
    {{-- Orion --}}
    <div class="container d-flex justify-content-center p-3">
        <img src="{{ asset('images/Orion.svg') }}" alt="">
    </div>
    {{-- Proker --}}
    <p class="mt-5 fs-1 text-center text-white ">--<span class="text-cream">Proker</span>--</p>
    <div class="container p-5">
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0" >
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>
                    <div class=" card-body text-center py-2  px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card prokerCard pt-2 px-0 m-0">
                    <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                        <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="...">
                        <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                            style="width:60px; height:60px" alt="">
                        <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                            style="width:50px; height:50px" alt="">
                    </div>

                    <div class=" card-body text-center py-2 px-0 m-0">
                        <h5 class="card-title">Hearing Prodi</h5>
                        <p class="card-text">Divisi KASTRAD merupakan kepanjangan
                            dari Divisi Kajian Strategis dan Advokasi.
                            Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-end translate-middle-y  p-0 m-0" style="z-index:-3 !important;">
        <img src="{{ asset('images/Stars2.svg') }}" alt="">
    </div>
    {{-- Anggota --}}

    <div class="container-fluid align-items-center d-flex justify-content-center ">
        <div class="slider">
            <div class="item">
                <div class="card rounded-2 mb-2 bg-lavender teamCard" style="width:18rem;" id="card1">
                    <img src="{{ asset('images/mas_taza.png') }}" class="card-img-top mt-5 position-relative z-0"
                        alt="...">
                    <div class="card-body position-absolute z-1 bottom-0  my-2 container-fluid rounded-bottom-2 ">
                        <div class="text-center">
                            <h5 class="card-title text-center ">Ahmad Fatha Mumtaza1s</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center ">Kepala Divis</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card rounded-2 mb-2 bg-lavender teamCard" style="width:18rem;" id="card1">
                    <img src="{{ asset('images/mas_taza.png') }}" class="card-img-top mt-5 position-relative z-0"
                        alt="...">
                    <div class="card-body position-absolute z-1 my-2 container-fluid bottom-0 rounded-bottom-2 ">
                        <div class="text-center">
                            <h5 class="card-title text-center ">Ahmad Fatha Mumtaza1s</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center ">Kepala Divis</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card rounded-2 mb-2 bg-lavender teamCard" style="width:18rem;" id="card1">
                    <img src="{{ asset('images/mas_taza.png') }}" class="card-img-top mt-5 position-relative z-0"
                        alt="...">
                    <div class="card-body position-absolute z-1 my-2 container-fluid bottom-0 rounded-bottom-2 ">
                        <div class="text-center">
                            <h5 class="card-title text-center ">Ahmad Fatha Mumtaza1s</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center ">Kepala Divis</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card rounded-2 mb-2 bg-lavender teamCard" style="width:18rem;" id="card1">
                    <img src="{{ asset('images/mas_taza.png') }}" class="card-img-top mt-5 position-relative z-0"
                        alt="...">
                    <div class="card-body position-absolute z-1 my-2 container-fluid bottom-0 rounded-bottom-2 ">
                        <div class="text-center">
                            <h5 class="card-title text-center ">Ahmad Fatha Mumtaza1s</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center ">Kepala Divis</h6>
                        </div>
                    </div>
                </div>
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    </div>
    @include('components.footer')
    <script src="{{asset('assets/js/carousel.js')}}"></script>
@endsection
