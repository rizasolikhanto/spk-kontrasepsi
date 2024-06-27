@extends('admin.layouts.app')
@section('title', 'Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush
@section('content')
<div class="breadcrumb">
    <h1>Kontrasepsi | </h1>
    <a href="/admin/contraceptives/create" class="btn btn-primary btn-sm">Create</a>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Data Kontrasepsi</h4>
                <p>Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi</p>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kontrasepsi</th>
                                <th>Deskripsi</th>
                                <th>Saran</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contraceptives as $contraceptive)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contraceptive->name }}</td>
                                <td>{!! $contraceptive->description !!}</td>
                                <td>{!! $contraceptive->suggestion !!}</td>
                                <td>

                                    <a href="/admin/contraceptives/{{ $contraceptive->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <form action="/admin/contraceptives/{{ $contraceptive->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Data gejala akan terhapus')">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/datatables.script.min.js"></script>
@endpush