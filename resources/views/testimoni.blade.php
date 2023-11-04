@extends('layouts.master')
@section('title',"TESTIMONI")
@section('css')
    <link rel="stylesheet" href="{{asset("css/testimoni.css")}}">
@endsection
@include('components.navbar')
@section('content')
<h1 class="text-center fw-bold p-4 text-title">Apa Kata Mereka Tentang <span> <img src="{{asset('images/ASSETS.svg')}}" alt=""></span></h1>
<div class="container-xxl p-5">
    <div class="row row-cols-1 row-cols-lg-2 g-5">
        <div class="col">
            <div class="card mb-3  bg-green-1" >
                <div class="row g-0">
                  <div class="col">
                    <img src="{{asset('assets/image/bapakmu.jpg')}}" class="img-fluid rounded-start p-4 " alt="...">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Bang daniel</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 rounded-5 bg-green-2" >
                <div class="row g-0 rounded-5">
                  <div class="col-md">
                    <img src="{{asset('assets/image/bapakmu.jpg')}}" class="img-fluid rounded-start p-4" alt="...">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Bang daniel</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-2" >
                <div class="row g-0">
                  <div class="col-md">
                    <img src="{{asset('assets/image/bapakmu.jpg')}}" class="img-fluid rounded-start p-4" alt="...">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Bang daniel</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-1" >
                <div class="row g-0">
                  <div class="col-md">
                    <img src="{{asset('assets/image/bapakmu.jpg')}}" class="img-fluid rounded-start p-4" alt="...">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Bang daniel</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>
@include('components.footer')
@endsection
