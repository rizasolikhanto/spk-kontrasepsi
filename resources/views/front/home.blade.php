@extends('layouts.app')

@section('title', 'Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi')

@section('content')

<!-- banner-style-two -->
<section class="banner-style-two" style="background-image: url(banner3.png)">
    <div class="pattern-layer" style="background-image: url(banner.png)"></div>
    <div class="auto-container">
         <div class="content-box">
        <h1 style="margin-bottom: 2px;">Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi Menggunakan Metode Naive Bayes</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('logo3.png') }}" mt  alt="">
            </div>
        </div>
        <div class="btn btn-light col-4 btn-lg mt-4"><a href="{{ url('/login') }}">Mulai Konsultasi</a></div>
        </div>
    </div>
</section>
<section class="process-style-two text-center bg-color-1"> 
    <div class="auto-container">
    <div class="sec-title">
            <p>Apa Itu Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi ?</p>
            <h2>Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi</h2>
            <h3 align="justify"><font size="3">Sistem pendukung keputusan pemilihan alat kontrasepsi adalah sebuah sistem yang membantu akseptor dalam menentukan alat kontrasepsi yang sesuai dengan kebutuhan, serta menggunakan metode naive bayes dalam melakukan perhhitungan atau proses konsultasinya.</font></h3>
            <h3 align="justify"><font size="3">Metode Naive Bayes merupakan metode pengklasifikasian yang efektif dan efisien, dengan menggunakan teori probabilitas UNTUK untuk memprediksi peluang yang akan datang berdasarkan pada peluang pengalaman masa lalu.</font></h3>
        <div class="sec-title">
            <p>BAGAIMANA SISTEM BEKERJA</p>
            <h2>Bagaimana Cara Kerja Sistem ?</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shap-3.png);"></div>
                    <div class="icon-box">
                        <div class="count-box"><span>1</span></div>
                        <i class="flaticon-database"></i>
                    </div>
                    <h3>Penerimaan Pengetahuan</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="shape-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shap-4.png);"></div>
                    <div class="icon-box">
                        <div class="count-box"><span>2</span></div>
                        <i class="flaticon-robot"></i>
                    </div>
                    <h3>Konsultasi</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <div class="count-box"><span>3</span></div>
                        <i class="flaticon-search"></i>
                    </div>
                    <h3>Penjelasan Hasil Konsultasi</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-style-two end -->
@guest
<!-- Modal -->
<div class="modal fade" id="doctModal" tabindex="-1" aria-labelledby="doctModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctModalLabel">Langkah-langkah sebelum berkonsultasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1. Pastikan sudah <code>registrasi</code>, jika belum klik <a href="{{ url('/register') }}" class="badge badge-info">disini</a></p>
                <p>2. Klik tombol <code>login</code> yang terdapat pada sebelah kanan atas</p>
                <p>3. Masukan <code>email</code> dan <code>password</code> jika sudah punya akun</p>
                <p>4. Klik <code>login</code></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Mengerti</button>
            </div>
        </div>
    </div>
</div>
@endguest

@endsection

@push('js')
    <script>
        setTimeout(() => {
            $('#doctModal').modal('show');
        }, 1500)
    </script>
@endpush
