@extends('layouts.app')

@section('title', 'Produk - MM Bakery')

@section('content')
<section id="produk" class="container my-5">
    <h2 class="text-center">Produk Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk1.jpg') }}" class="card-img-top" alt="Rainbow Roll Cake">
                <div class="card-body">
                    <h5 class="card-title">Rainbow Roll Cake</h5>
                    <p class="card-text">Rp 50.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk2.jpg') }}" class="card-img-top" alt="Lapis Surabaya">
                <div class="card-body">
                    <h5 class="card-title">Lapis Surabaya</h5>
                    <p class="card-text">Rp 65.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/produk/produk3.jpg') }}" class="card-img-top" alt="Brownies Kukus">
                <div class="card-body">
                    <h5 class="card-title">Brownies Kukus</h5>
                    <p class="card-text">Rp 45.000</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
