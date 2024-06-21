@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Divisi') }}</h1>
    <div class="row mb-3">
        <div class="col-md-12">
            <a class="btn btn-large btn-primary" href="{{ url('/divisi/create') }}">Data Divisi</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th>Ruang</th>
                <th>Nomor Ruang</th>
                <th>Gedung</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($divisi as $div)
            <tr>
                <td class="d-flex">
                    <a href="{{ url('/divisi/edit/'.$div->id) }}" class="btn btn-primary">Edit</a>
                    &nbsp;
                    <form action="{{ url('/divisi/destroy/'.$div->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                <td>{{$div->jabatan->jabatan}}</td>
                <td>{{ $div->nama_divisi }}</td>
                <td>{{ $div->ruang }}</td>
                <td>{{ $div->nomor_ruang }}</td>
                <td>{{ $div->gedung }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="14">
                    <div class="alert alert-warning">
                        <h5 class="text-center text-danger text-bold">Tidak ada data!</h5>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if($divisi)
        {{ $divisi->links() }}
    @endif
</div>
@endsection
