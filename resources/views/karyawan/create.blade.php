@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('Data Karyawan') }}</h1>

    <form method="post" action="{{ url('/karyawan/store') }}" class="form-horizontal">
        @csrf

        <div class="form-group row mb-3">
            <label for="nama" class="col-md-2 col-form-label">Nama</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            </div>

            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="tanggal_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            </div>

            <label for="gender" class="col-md-2 col-form-label">Gender</label>
            <div class="col-md-4">
                <div class="form-check form-check-inline">
                    <input type="radio" id="pria" name="gender" value="pria" class="form-check-input">
                    <label for="pria" class="form-check-label">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="wanita" name="gender" value="wanita" class="form-check-input">
                    <label for="wanita" class="form-check-label">Wanita</label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="pendidikan_terakhir" class="col-md-2 col-form-label">Pendidikan Terakhir</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
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
