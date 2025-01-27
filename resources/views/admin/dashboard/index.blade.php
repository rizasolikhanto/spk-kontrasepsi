@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- ============ Body content start ============= -->
<div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Admin</a></li>
        <li>Dashboard</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-lg-6 col-md-12">
        <!-- CARD ICON-->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-users text-primary" style="font-size: 30px;"></i>
                        <p class="text-muted mt-2 mb-2">Users</p>
                        <p class="text-primary text-24 line-height-1 m-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope text-primary" style="font-size: 30px;"></i>
                        <p class="text-muted mt-2 mb-2">Kontrasepsi</p>
                        <p class="text-primary text-24 line-height-1 m-0"></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-hand-sparkles text-primary" style="font-size: 30px;"></i>
                        <p class="text-muted mt-2 mb-2">Rules</p>
                        <p class="text-primary text-24 line-height-1 m-0"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/js/plugins/echarts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/echart.options.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/dashboard.v2.script.min.js"></script>
@endpush