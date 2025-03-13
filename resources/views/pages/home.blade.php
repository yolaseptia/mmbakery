@extends('layouts.app')

@section('content')

<!-- Banner -->
<section id="beranda">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel/image1.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel/image2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<!-- Produk -->
<section id="produk" class="container my-5">
    <h2 class="text-center">Produk Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk1.jpg') }}" class="card-img-top" alt="Produk 1">
                <div class="card-body">
                    <h5 class="card-title">Rainbow Roll Cake</h5>
                    <p class="card-text">Rp 50.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk2.jpg') }}" class="card-img-top" alt="Produk 2">
                <div class="card-body">
                    <h5 class="card-title">Lapis Surabaya</h5>
                    <p class="card-text">Rp 65.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk3.jpg') }}" class="card-img-top" alt="Produk 3">
                <div class="card-body">
                    <h5 class="card-title">Brownies Kukus</h5>
                    <p class="card-text">Rp 45.000</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami -->
<section id="tentang" class="container my-5">
    <h2 class="text-center">Tentang Kami</h2>
    <p class="text-center">MM Bakery adalah toko roti yang menyediakan berbagai macam kue lezat dan berkualitas tinggi.</p>
</section>

<!-- Outlet -->
<section id="outlet" class="container my-5">
    <h2 class="text-center">Outlet Kami</h2>
    <p class="text-center">Temukan outlet kami di berbagai lokasi strategis.</p>
</section>

<!-- Kontak -->
<section id="kontak" class="container my-5">
    <h2 class="text-center">Hubungi Kami</h2>
    <p class="text-center">Alamat: Jl. Mayor Jend. Di Panjaitan No.79, Kota Madiun, Jawa Timur</p>
    <p class="text-center">Telepon: 0812-3456-7890 | Email: contact@mmbakery.com</p>
</section>

@endsection
