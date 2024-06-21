@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('Update Data Divisi') }}</h1>

    <form method="post" action="{{ url('/divisi/update' , $divisi->id)  }}" class="form-horizontal">
        @method('POST')
        @csrf
        
        <div class="form-group row mb-3">
            <label for="jabatan_id" class="col-md-2 col-form-label">No Jabatan</label>
            <div class="col-md-4">
                <input type="integer" class="form-control" id="jabatan_id" name="jabatan_id" value="{{ old('jabatan_id') }}">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="nama_divisi" class="col-md-2 col-form-label">Nama Divisi</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" value="{{ old('nama_divisi') ?? $divisi->nama_divisi }}">
            </div>

            <label for="ruang" class="col-md-2 col-form-label">Ruang</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="ruang" name="ruang" value="{{ old('ruang') ?? $divisi->ruang }}">
            </div>

            <label for="gedung" class="col-md-2 col-form-label">gedung</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="gedung" name="gedung" value="{{ old('gedung') ?? $divisi->gedung }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nomor_ruang" class="col-md-2 col-form-label">Nomor Ruang</label>
            <div class="col-md-4">
                <input type="number" class="form-control" id="nomor_ruang" name="nomor_ruang" value="{{ old('nomor_ruang') ?? $divisi->nomor_ruang}}">
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
