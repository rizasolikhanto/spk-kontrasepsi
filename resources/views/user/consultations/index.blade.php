@extends('user.layouts.app')
@section('title', 'Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush
@section('content')
<div class="breadcrumb">
    <h1>Riwayat Konsultasi </h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Data riwayat konsultasi</h4>
                <p>Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi</p>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kontrasepsi</th>
                                {{-- <th>Kelompok Usia</th>
                                <th>Rentang Usia</th> --}}
                                <th>Jumlah Anak</th>
                                <th>Jarak Kelahiran</th>
                                <th>Status Pasca Kelahiran</th>
                                <th>Status Pasca Keguguran</th>
                                <th>Status KB</th>
                                {{-- <th>Probabilitas</th> --}}
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($histories as $history)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $history->contraceptive->name }}</td>
                                {{-- <td>{{ $history->group_age }}</td>
                                <td>{{ $history->minimum_age }}-{{ $history->maximum_age }}</td> --}}
                                <td>{{ $history->amount_children }}</td>
                                <td>{{ $history->birth_interval }}</td>
                                <td>{{ $history->post_birth_status == "1" ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $history->post_miscarriage_status == "1" ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $history->contraceptive_status }}</td>
                                {{-- <td>

                                    <a href="/admin/historys/{{ $history->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="/admin/historys/{{ $history->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Data gejala akan terhapus')">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td> --}}
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