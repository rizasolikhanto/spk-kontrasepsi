@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Rules</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Tambah Data Rules</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.rules.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="contraceptives">Kontrasepsi</label>
                            <select class="form-control @error('contraceptive_id') @enderror" id="contraceptive_id" name="contraceptive_id">
                                @foreach ($contraceptives as $contraceptive)
                                <option value="{{ $contraceptive->id }}">{{ $contraceptive->name }}</option>
                                @endforeach
                            </select>
                            @error('contraceptive_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="group_age">Kelompok Usia</label>
                            <select class="form-control" id="group_age" name="group_age" required="required">
                                <option value="">--- Pilih Kelompok Usia ---</option>
                                <option value="puncak kesuburan" {{ old('group_age') == "puncak kesuburan" ? 'selected' : '' }}>Puncak Kesuburan</option>
                                <option value="kesuburan tinggi" {{ old('group_age') == "kesuburan tinggi" ? 'selected' : '' }}>Kesuburan Tinggi</option>
                                <option value="kesuburan menurun sedikit" {{ old('group_age') == "kesuburan menurun sedikit" ? 'selected' : '' }}>Kesuburan Tinggi</option>
                                <option value="penurunan kesuburan" {{ old('group_age') == "penurunan kesuburan" ? 'selected' : '' }}>Penurunan kesuburan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="minimum_age">Usia Minimum</label>
                            <input class="form-control @error('minimum_age') is-invalid @enderror" name="minimum_age" id="minimum_age" type="number" value="{{ old('minimum_age') }}">
                            @error('minimum_age') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="maximum_age">Usia Maksimum</label>
                            <input class="form-control @error('maximum_age') is-invalid @enderror" name="maximum_age" id="maximum_age" type="number" value="{{ old('maximum_age') }}">
                            @error('maximum_age') <small class="form-text text-danger">{{ $message }}</small> @enderror
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
                        {{-- <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input class="form-control @error('probability') is-invalid @enderror" probability="probability" id="probability" type="number" value="{{ old('probability') }}">
                            @error('probability') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div> --}}
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