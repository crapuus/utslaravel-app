@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('Update Data Jabatan') }}</h1>

    <form method="post" action="{{ url('/jabatan/update' , $jabatan->id)  }}" class="form-horizontal">
        @method('POST')
        @csrf
        
        <div class="form-group row mb-3">
            <label for="nama_karyawan" class="col-md-2 col-form-label">Nama Karyawan</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="{{ old('nama_karyawan') ?? $jabatan->nama_karyawan}}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') ?? $jabatan->jabatan}}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ?? $jabatan->alamat}}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="umur" class="col-md-2 col-form-label">Umur</label>
            <div class="col-md-4">
                <input type="number" class="form-control" id="umur" name="umur" value="{{ old('umur') ?? $jabatan->umur}}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="status" class="col-md-2 col-form-label">Status</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="status" name="status" value="{{ old('status') ?? $jabatan->status}}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nohp" class="col-md-2 col-form-label">No. HP</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nohp" name="nohp" value="{{ old('nohp') ?? $jabatan->nohp}}">
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
