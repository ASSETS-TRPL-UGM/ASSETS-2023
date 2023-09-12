@extends('layouts.dump2')
@section('title','News')

@section('content')
@include('components.navbar')
<main>
    <div class="container-fluid m-4 p-4 rounded-3 d-flex justify-content-center" style="background-color: gray">
        <h3>Welcome to Asset News</h3>
    </div>
    <div class="container-fluid m-4 p-4">
        <div class="row">
            <div class="col mx-4">
                <div class="container p-4 rounded-3 d-flex justify-content-center" style="background-color: gray">
                    <img src="{{getAssetdir("assets/image/bapakmu.jpg")}}" alt="News Images">
                </div>
            </div>
            <div class="col my-4 me-5">
                <div class="container  ">
                    <div class="container d-flex flex-column">
                    <div class="row "><h6>50 minutes ago</h6></div>
                    <div class="row"><h3>TEDI GAMES AND ELECTRONIC SPORT</h3></div>
                    <div class="row"><h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum quos ut incidunt repellat nisi quo corporis fuga dolore impedit quae, molestiae veniam optio reprehenderit pariatur? Hic asperiores molestiae aut!</h6></div>
                    <div class="row"><h5>read 4 minutes ago</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    @include('components.footer')
@endsection
