@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Hasil Konsultasi Kontrasepsi</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Konsultasi Kontrasepsi</p>
        <div class="card mb-5">
            <div class="card-body">
                <h2>Hasil Konsultasi</h2>
                <p>berdasarkan usia, jumlah anak, jarak kelahiran, status pasca kelahiran, status pasca keguguran, dan status kontrasepsi. Kontrasepsi yang cocok untuk anda adalah {{$result->contraceptive->name}} </p>
                <p>Informasi : {{$result->contraceptive->description}}</p>
                <p>Saran : {{$result->contraceptive->suggestion}}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend/js/plugins/ckeditor/ckeditor.js') }}"></script>
@endpush