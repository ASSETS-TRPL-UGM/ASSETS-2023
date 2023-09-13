@extends('layouts.dump2')
@section('title',"TESTIMONI")
@include('components.navbar')
@section('content')
<h1 class="text-center fw-bold p-4">Apa Kata Mereka Tentang ASSETS?</h1>
<div class="container-md mx-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card mb-3" >
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
            <div class="card mb-3" >
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
            <div class="card mb-3" >
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
            <div class="card mb-3" >
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
