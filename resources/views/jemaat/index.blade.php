@extends('layouts.app')

@section('content')

<div class="container">

<h3>Daftar Jemaat<a href="{{ url('jemaat/create') }}">Tambah Data</a></h3>
<form class="form" method="get" action="{{ route('search') }}">
                <div class="form-group w-50 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan nama">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    @endif
<div class="table">
<table>
<tr>

<td>KODE</td>
<td>NAMA</td>
<td>STATUS</td>
<td>ALAMAT</td>
</tr>
@foreach($rows as $row)
<tr>
<td>{{ $row->jemaat_kode }}</td>
<td>{{ $row->jemaat_nama }}</td>
<td>{{ $row->jemaat_status }}</td>
<td>{{ $row->jemaat_alamat }}</td>
<td><a href="{{ url('jemaat/' . $row->jemaat_id . '/edit') }}">Edit</a></td>
<td><form action="{{ url('jemaat/' . $row->jemaat_id) }}" method="POST">
<input name="_method" type="hidden" value="DELETE">
@csrf
<button>Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
</div>
</div>

@endsection