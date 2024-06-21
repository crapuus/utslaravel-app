@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{ __('Karyawan') }}</h1>
<div class="row">
<div class="col-md-12">
<a class="btn btn-large btn-primary"
href="{{ url('/karyawan/create') }}">Data Karyawan</a>
</div>
</div>
<table class="table table-striped">
<thead>
<tr>
<th>&nbsp;</th>
<th>Karyawan</th>
<th>Alamat</th>
<th>Pendidikan Terakhir</th>
<th>Gender</th>
<th>Tanggal Lahir</th>
</tr>
</thead>
<tbody>
@forelse ($karyawan as $ka)
<tr>
<td class="d-flex">
<a href="{{ url('/karyawan/edit/'.$ka->id) }}"
class="btn btn-primary">
Edit
</a>
&nbsp;
<form action="{{ url('/karyawan/destroy/'.$ka->id) }}"
method="POST">

@csrf

<button type="submit" class="btn btn-danger"
onclick="return confirm('Are you sure?')">
Delete
</button>
</form>
</td>
<td>{{ $ka->nama }}</td>
<td>{{ $ka->alamat }}</td>
<td>{{ $ka->pendidikan_terakhir }}</td>
<td>{{ $ka->gender }}</td>
<td>{{ $ka->tanggal_lahir }}</td>
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
@if($karyawan)
{{ $karyawan->links() }}
@endif
</div>
@endsection