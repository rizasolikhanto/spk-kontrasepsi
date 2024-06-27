@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Kontrasepsi</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Ubah Data Kontrasepsi</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ url('admin/contraceptives/' . $contraceptives->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="name">Nama Kontrasepsi</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ $contraceptives->name }}">
                            @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="ckeditor" name="description" id="description" placeholder="informasi">{{ $contraceptives->description }}</textarea>
                            @error('description') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="suggestion">Saran</label>
                            <textarea class="ckeditor" name="suggestion" id="suggestion" placeholder="Saran">{{ $contraceptives->suggestion }}</textarea>
                            @error('suggestion') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend/js/plugins/ckeditor/ckeditor.js') }}"></script>
@endpush