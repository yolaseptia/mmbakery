@extends('layouts.app')

@section('title', 'Tentang Kami - MM Bakery')

@section('content')
<section id="tentang" class="container my-5" data-aos="fade-up">
    <div class="row align-items-center">
        <!-- Gambar di Kiri -->
        <div class="col-md-6 text-center" data-aos="zoom-in">
            <img src="{{ asset('images/carousel/tentang.jpg') }}" class="img-fluid rounded shadow" alt="Tentang MM Bakery">
        </div>

       <!-- Teks di Kanan -->
       <div class="col-md-6" style="font-family: 'Poppins', sans-serif;">
            <h2 class="fw-bold mb-4">Tentang Kami</h2>
            <p style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
                Pada tahun 2008, dengan pengalaman dan kecintaan mendalam terhadap dunia roti dan kue, MM Bakery lahir di Madiun.
                Nama "MM" sendiri terinspirasi dari Maimunah, sosok ibu yang penuh kasih dan menjadi pilar utama di balik perjalanan sang pemilik.
                Bagi beliau, seorang ibu adalah sumber kekuatan yang melahirkan keajaiban dalam setiap aspek kehidupan.
            </p>
            <p style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
                Seiring berjalannya waktu, MM Bakery terus berkembang dan kini telah memiliki 6 outlet berkat dukungan serta kepercayaan dari pelanggan setia.
                Kami berkomitmen untuk selalu menghadirkan kualitas terbaik dan pelayanan istimewa, agar setiap gigitan dari produk kami membawa kebahagiaan bagi Anda.
            </p>
    </div>
</section>

<!-- CSS Responsif -->
<style>
    @media (max-width: 768px) {
        #tentang .row {
            flex-direction: column-reverse;
            text-align: center;
        }

        #tentang img {
            margin-bottom: 20px;
            width: 80%;
        }
    }
</style>
@endsection
