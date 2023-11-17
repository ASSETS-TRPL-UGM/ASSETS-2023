@extends('layouts.orion')
@section('title', 'Kastrad')
@section('content')
    @include('components.navbar')
    <div class="container-fluid position-relative p-0 m-0 overflow-hidden ">
    <div class="orange position-absolute z-0"></div>
    <div class="container my-5 mx-auto position-relative z-1">
        <div class="row row-cols-1 row-cols-md-2" >
            <div class="col" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/WhatsApp Image 2022-04-14 at 17.32 1.png') }}" class="card-img-top rounded-2"
                    style="max-width:560px; max-height:320px;" alt="...">
            </div>
            <div class="col" data-aos="fade-left" data-aos-duration="1000">
                <div class="container ms-2 mt-2 ">
                    <p class="fs-2 text-cream ">Kajian Strategis & Advokasi</p>
                    <p class="text-white">Divisi KASTRAD merupakan kepanjangan dari Divisi Kajian Strategis
                        dan Advokasi. Divisi ini mewadahi aspirasi mahasiswa TRPL, serta
                        mengkomunikasikan hasil kajian dan isu penting dalam pengambilan
                        kebijakan prodi maupun departemen. Selain itu, Kastrad juga bertugas
                        membantu menyambut mahasiswa baru.</p>
                    <a name="" id="" class="btn bg-cream py-3" style="border-radius: 20px" href="#" role="button">Read More</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Orion --}}
    <div class="container d-flex justify-content-center m-3">
        <img src="{{ asset('images/Orion.svg') }}" alt="">
    </div>
    {{-- Proker --}}
    <p class="mt-5 fs-1 text-center text-white ">--<span class="text-cream">Proker</span>--</p>
    <img src="{{asset('images/Stars.svg')}}" class="position-absolute z-0" alt="" style="right:-100px;top:1200px">
    <div class="purple position-absolute z-0"></div>
    <div class="blue position-absolute z-0"></div>
    <div class="container mx-5 d-flex justify-content-center position-relative  z-1 " data-aos="fade-up" data-aos-duration="3000">
        <div class="container m-5">
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0" >
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>
                        <div class=" card-body text-center py-2  my-0 px-1 ">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun" alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card prokerCard pt-2 px-0 m-0">
                        <div class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                            <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                            style="width:100%; height:100%">
                            <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute mb-5"
                                style="width:25%; height:25%;" alt="">
                            <img src="{{ asset('images/prokerKastrad1.svg') }}" class=" z-2 position-absolute mb-5"
                                style="width:10%; height:10%;" alt="">
                        </div>

                        <div class=" card-body text-center py-2 px-1 m-0">
                            <h5 class="card-title">Hearing Prodi</h5>
                            <p class="card-text fs-7 ">Divisi KASTRAD merupakan kepanjangan
                                dari Divisi Kajian Strategis dan Advokasi.
                                Divisi ini mewadahi aspirasi mahasiswa TRPL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Anggota --}}
    <p class="mt-5 fs-1 text-center text-white ">--<span class="text-cream">Meet Our Team</span>--</p>
    <div class="container-fluid align-items-center d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1200">
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
</div>
    @include('components.footer')
    <script src="{{asset('assets/js/carousel.js')}}"></script>
    <script>
        // Initialize AOS after the DOM has loaded
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
@endsection
