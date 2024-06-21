@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('Data Divisi') }}</h1>

    <form method="post" action="{{ url('/divisi/store') }}" class="form-horizontal">
        @csrf

        <div class="form-group row mb-3">
            <label for="jabatan_id" class="col-md-2 col-form-label">Select Jabatan</label>
            <div class="col-md-4">
                <select name="jabatan_id" class="form-control" id="jabatan_id">
                    @foreach ($jabatans as $jab)
                        <option value="{{ $jab->id }}">{{ $jab->jabatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nama_divisi" class="col-md-2 col-form-label">Nama Divisi</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" value="{{ old('nama_divisi') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="ruang" class="col-md-2 col-form-label">Ruang</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="ruang" name="ruang" value="{{ old('ruang') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nomor_ruang" class="col-md-2 col-form-label">Nomor Ruang</label>
            <div class="col-md-4">
                <input type="number" class="form-control" id="nomor_ruang" name="nomor_ruang" value="{{ old('nomor_ruang') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="gedung" class="col-md-2 col-form-label">Gedung</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="gedung" name="gedung" value="{{ old('gedung') }}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
