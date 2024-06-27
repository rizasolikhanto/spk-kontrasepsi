@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Konsultasi Kontrasepsi</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Konsultasi</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{route('user.process')}}" method="POST">                        
                        @csrf
                        
                        <div class="form-group">
                            <label for="age">Usia</label>
                            <input class="form-control @error('age') is-invalid @enderror" name="age" id="age" type="number" value="{{ old('age') }}">
                            @error('age') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="amount_children">Jumlah Anak</label>
                            <input class="form-control @error('amount_children') is-invalid @enderror" name="amount_children" id="amount_children" type="number" value="{{ old('amount_children') }}">
                            @error('amount_children') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="birth_interval">Jarak Kelahiran</label>
                            <input class="form-control @error('birth_interval') is-invalid @enderror" name="birth_interval" id="birth_interval" type="number" value="{{ old('birth_interval') }}">
                            @error('birth_interval') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="post_birth_status">Status Pasca Kelahiran</label>
                            <div class="form-check">
                                <input class="form-check-input" value="1" id="post_birth_status" type="radio" name="post_birth_status" @if(old('post_birth_status') == '1') checked @endif checked>
                                <label class="form-check-label" for="flexRadioDefault1">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="0" id="post_birth_status" type="radio" name="post_birth_status" @if(old('post_birth_status') == '0') checked @endif>
                                <label class="form-check-label" for="flexRadioDefault2">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="post_miscarriage_status">Status Pasca Keguguran</label>
                            <div class="form-check">
                                <input class="form-check-input" value="1" id="post_miscarriage_status" type="radio" name="post_miscarriage_status" @if(old('post_miscarriage_status') == '1') checked @endif checked>
                                <label class="form-check-label" for="flexRadioDefault1">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="0" id="post_miscarriage_status" type="radio" name="post_miscarriage_status" @if(old('post_miscarriage_status') == '0') checked @endif>
                                <label class="form-check-label" for="flexRadioDefault2">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contraceptive_status">Status Kontrasepsi</label>
                            <select class="form-control" id="contraceptive_status" name="contraceptive_status" required="required">
                                <option value="">--- Pilih Status Kontrasepsi ---</option>
                                <option value="peserta kb baru" {{ old('contraceptive_status') == "peserta kb baru" ? 'selected' : '' }}>Peserta KB Baru</option>
                                <option value="peserta kb ganti" {{ old('contraceptive_status') == "peserta kb ganti" ? 'selected' : '' }}>Peserta KB Ganti </option>
                                <option value="peserta kb ulangan" {{ old('contraceptive_status') == "peserta kb ulangan" ? 'selected' : '' }}>Peserta KB Ulangan</option>
                                <option value="komplikasi" {{ old('contraceptive_status') == "komplikasi" ? 'selected' : '' }}>Komplikasi</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Tambah</button>
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