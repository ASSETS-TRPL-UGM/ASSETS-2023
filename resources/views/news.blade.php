@extends('layouts.orion')
@section('title', 'News')

@section('content')
    @include('components.navbar')
    <main>
        <div class="container-fluid overflow-hidden py-4 position-relative ">
            <div class="container-fluid px-3 mt-5 d-flex justify-content-center position-relative ">
                <div class="container m-4 py-4 object-fit-cover rounded-3 welcome position-relative overflow-hidden  ">
                    <img src="{{asset('images/13.png')}}" alt="" srcset=""  class=" position-absolute z-1" style="right:-5rem;">
                    
                    <img src="{{asset('images/13 (1).png')}}" alt="" srcset=""  class=" position-absolute z-1" style="left:-5rem;">
                    <p class="text-white text-center fs-2 ">Welcome to Asset <span class=" text-bg-info"> News</span></p>
                    <p class="text-white text-center fs-5 px-5  ">This is a place for news information about ASSETS and Software
                        Engineering Technology
                        Study Program at Gadjah Mada University</p>

                </div>
            </div>
            <img src="{{ asset('images/Stars.svg') }}" class="position-absolute z-10 pulsate w-25 " alt=""
            style="right:-75px;top:-100px;">
            <img src="{{ asset('images/stars.png') }}" class="position-absolute z-10 pulsate w-25 "  alt=""
            style="right:350px;top:675px;">
            <div class="container-fluid px-5 position-relative">
                <div class="row p-0 m-0 row-cols-1 row-cols-lg-2 ">
                    <div class="col d-flex justify-content-center align-items-center my-5">
                        {{-- <div class="container p-4 rounded-3">
                            <img src="{{ asset('images/Liga.jpg') }}" class= "object-fit-cover " alt="News Images">
                        </div> --}}
                        <div class="container-fluid rounded-3" style="background-image: url(images/Liga.jpg); background-size:cover; height:400px !important;"></div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center ">
                        <div class="container  ">
                            <div class="container d-flex flex-column">
                                <div class="row ">
                                    <h6 class="text-white" >50 minutes ago</h6>
                                </div>
                                <div class="row">
                                    <h2 class=" text-cream">TEDI GAMES AND ELECTRONIC SPORT 2023</h4>
                                </div>
                                <div class="row">
                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum quos ut
                                        incidunt repellat nisi quo corporis fuga dolore impedit quae, molestiae veniam optio reprehenderit pariatur? Hic asperiores molestiae aut!</p>
                                </div>
                                <div class="row">
                                    <p class="text-white fs-6 ">read 4 minutes ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="yellow position-absolute z-10"></div>
            <div class="green position-absolute z-10"></div>
            <div class="red position-absolute z-10"></div>
            <div class="container-fluid px-5 mb-5 position-relative ">
                {{-- text --}}
                <div class="container-fluid px-3 d-flex align-items-center my-3">
                    <p class="fs-2 text-cream">Latest News</p>
                    <p class="text-white ms-auto ">Read more -></p>
                </div>
                {{-- news --}}
                <div class="container-fluid">
                    <div class="row row-cols-2 row-cols-lg-4 g-4 ">
                        <div class="col text-white overflow-hidden m-0">
                            <img src="{{asset('assets/image/news/ambil_transkip.png')}}" alt="" class="mb-1 rounded-3">
                            <p class="fw-light m-0 text-secondary">1 minute ago</p>
                            <p class="fs-4 text-cream m-0 ">Pengumuman pengambilan transkip nilai</p>
                            <p class="overflow-hidden m-0">Diinformasikan kepada wisudawan/wati
                                DTEDI SV UGM dengan daftar terlampir,
                                dapat mengambil transkrip nilai dan SKPI...</p>
                            <p class="fw-light m-0 ">2 min read</p>
                        </div>
                        <div class="col text-white overflow-hidden m-0 ">
                            <img src="{{asset('assets/image/news/ambil_transkip.png')}}" alt="" class="mb-1 rounded-3">
                            <p class="fw-light m-0 text-secondary ">1 minute ago</p>
                            <p class="fs-4 text-cream m-0 ">Pengumuman pengambilan transkip nilai</p>
                            <p class="overflow-hidden m-0">Diinformasikan kepada wisudawan/wati
                                DTEDI SV UGM dengan daftar terlampir,
                                dapat mengambil transkrip nilai dan SKPI...</p>
                            <p class="fw-light m-0 ">2 min read</p>
                        </div>
                        <div class="col text-white overflow-hidden m-0 ">
                            <img src="{{asset('assets/image/news/ambil_transkip.png')}}" alt="" class="mb-1 rounded-3">
                            <p class="fw-light m-0 text-secondary ">1 minute ago</p>
                            <p class="fs-4 text-cream m-0 ">Pengumuman pengambilan transkip nilai</p>
                            <p class="overflow-hidden m-0">Diinformasikan kepada wisudawan/wati
                                DTEDI SV UGM dengan daftar terlampir,
                                dapat mengambil transkrip nilai dan SKPI...</p>
                            <p class="fw-light m-0 ">2 min read</p>
                        </div>
                        <div class="col text-white overflow-hidden m-0  ">
                            <img src="{{asset('assets/image/news/ambil_transkip.png')}}" alt="" class="mb-1 rounded-3">
                            <p class="fw-light m-0 text-secondary ">1 minute ago</p>
                            <p class="fs-4 text-cream m-0 ">Pengumuman pengambilan transkip nilai</p>
                            <p class="overflow-hidden m-0">Diinformasikan kepada wisudawan/wati
                                DTEDI SV UGM dengan daftar terlampir,
                                dapat mengambil transkrip nilai dan SKPI...</p>
                            <p class="fw-light m-0 ">2 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.footer')
@endsection
