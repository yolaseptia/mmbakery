@extends('layouts.app')

@section('title', 'Produk - MM Bakery')

@section('content')
<section id="produk" class="container my-5">
    <h2 class="text-center fw-bold mb-4">Produk Kami</h2>

    <!-- Tab Kategori -->
    <div class="kategori-tabs d-flex justify-content-center mb-4">
        <button class="kategori-btn active" onclick="filterProduk('all')">Semua</button>
        <button class="kategori-btn" onclick="filterProduk('roti')">Roti Manis</button>
        <button class="kategori-btn" onclick="filterProduk('donat')">Donat</button>
        <button class="kategori-btn" onclick="filterProduk('cake')">Cake</button>
        <button class="kategori-btn" onclick="filterProduk('pizza')">Pizza</button>
        <button class="kategori-btn" onclick="filterProduk('tart')">Tart</button>
    </div>

    <!-- Daftar Produk -->
    <div class="row g-4">
        @php
            $produkList = [
                ['Rainbow Roll Cake', 30000, 'produk1.jpg', 'cake'],
                ['Lapis Surabaya', 65000, 'produk2.jpg', 'cake'],
                ['Donat Mesis', 4000, 'produk3.jpg', 'donat'],
                ['Pizza Keju', 5000, 'pizza.jpg', 'pizza'],
                ['Tart Coklat', 95000, 'tart.jpg', 'tart'],
                ['Pisang Coklat', 4000, 'rotimanis.jpg', 'roti']
            ];
        @endphp

        @foreach($produkList as $produk)
        <div class="col-md-4 produk-item" data-category="{{ $produk[3] }}">
            <div class="produk-card p-3">
                <div class="produk-image-container">
                    <img src="{{ asset('images/produk/'.$produk[2]) }}" class="produk-img" alt="{{ $produk[0] }}">
                </div>
                <div class="produk-body text-center">
                    <h5 class="fw-bold">{{ $produk[0] }}</h5>
                    <p class="fw-bold text-success">Rp {{ number_format($produk[1], 0, ',', '.') }}</p>
                    <button class="btn btn-buy">Beli Sekarang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- CSS Custom -->
<style>
    /* Kategori Tab */
    .kategori-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .kategori-btn {
        background: #e5b76d;
        color: white;
        font-weight: bold;
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
        cursor: pointer;
        transition: background 0.3s ease-in-out, transform 0.2s ease;
    }

    .kategori-btn.active, .kategori-btn:hover {
        background: #d87c1b;
        transform: scale(1.1);
    }

    /* Produk Card */
    .produk-card {
        background-color: hsl(0, 0%, 96.5%);
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .produk-card:hover {
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Ukuran Gambar */
    .produk-image-container {
        width: 100%;
        height: 200px;
        overflow: hidden;
        border-radius: 8px;
    }

    .produk-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    /* Efek Hover pada Gambar */
    .produk-card:hover .produk-img {
        transform: scale(1.05);
    }

    /* Tombol Beli */
    .btn-buy {
        background-color: rgb(229, 183, 109);
        color: white;
        font-weight: bold;
        border-radius: 20px;
        padding: 8px 20px;
        border: none;
        transition: background 0.3s ease-in-out;
    }

    .btn-buy:hover {
        background-color: rgb(222, 128, 19);
    }

    /* Warna Harga Hijau */
    .text-success {
        color: #28a745 !important;
    }
</style>

<!-- Script Filter Kategori -->
<script>
    function filterProduk(category) {
        let items = document.querySelectorAll('.produk-item');
        let buttons = document.querySelectorAll('.kategori-btn');

        items.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });

        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>
@endsection
