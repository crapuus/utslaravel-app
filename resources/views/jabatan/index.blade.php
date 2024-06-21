@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Jabatan') }}</h1>
    <div class="row mb-3">
        <div class="col-md-12">
            <a class="btn btn-large btn-primary" href="{{ url('/jabatan/create') }}">Data Jabatan</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Status</th>
                <th>No HP</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($jabatan as $jab)
            <tr>
                <td class="d-flex">
                    <a href="{{ url('/jabatan/edit/'.$jab->id) }}" class="btn btn-primary">Edit</a>
                    &nbsp;
                    <form action="{{ url('/jabatan/destroy/'.$jab->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                <td>{{ $jab->nama_karyawan }}</td>
                <td>{{ $jab->jabatan }}</td>
                <td>{{ $jab->alamat }}</td>
                <td>{{ $jab->umur }}</td>
                <td>{{ $jab->status }}</td>
                 <td>{{ $jab->nohp }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7">
                    <div class="alert alert-warning">
                        <h5 class="text-center text-danger text-bold">Tidak ada data!</h5>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if($jabatan)
    <div class="d-flex justify-content-center">
        {{ $jabatan->links() }}
    </div>
    @endif
</div>
@endsection
