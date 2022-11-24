@extends('layout.layout')
@section('content')
    {{-- Carosel --}}
    <div class="card">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/69C78D9B-8D70-4FAB-973B-543DF734891F-59590-00000FF6B1C0F4A4.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Yang Terlupakan</h5>
                        <p>Bangunan tua yang sudah lama ditinggalkan.</p>
                    </div>
                </div>  
                <div class="carousel-item">
                    <img src="assets/E3A22CCF-EDB6-45A7-A716-4A4BDEFE148A-21217-00000A5F8EBCFA03.jpg"
                        class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dibelakangmu</h5>
                        <p>Sesekali menoleh kebelakang. Terkadang ada sesuatu yang indah walaupun hanya untuk dikenang.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/2455E681-967D-4421-929D-5FABE18B1A41-588-000001BEC02009F8.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jalan Panjang</h5>
                        <p>Berjalan dengan tangguh dan percaya diri.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/3B33E85E-5458-4F53-857B-3238CFE2A613-11891-00000399172CB9D7.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Peningkatan</h5>
                        <p>Jangan terjebak dalam zona nyaman.</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Result Post --}}
    <div class="mt-5 container">
        <h1 class="text-center">Result Photo</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/2DCA2972-2AE3-43EE-92E6-C8A2470667F5-21217-00000A5FC20C2B48.jpg" class="card-img-top img-fluid"
                        alt="...">
                    <div class="card-body">
                        <a href="/potrait" class="text-decoration-none">
                            <h5 class="card-title text-center text-secondary">Potrait Photograpy</h5>
                        </a>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/66C6D474-F704-47B4-88FA-7E0E8F8CC19C-11891-000004D5D0BC7443.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <a href="/urban" class="text-decoration-none">
                            <h5 class="card-title text-center text-secondary">Urban Photograpy</h5>
                        </a>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/F62F8590-B509-46D5-AFB6-1DEFE4A32885-21217-00000A5FA136DF4F.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <a href="/street" class="text-decoration-none">
                            <h5 class="card-title text-center text-secondary">Street Photograpy</h5>
                        </a>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-5">

    </div>
@endsection
