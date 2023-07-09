@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Jemaat</h3>
<form action="{{ url('/jemaat/' . $row->jemaat_id) }}" method="POST">
<input name="_method" type="hidden" value="PATCH">
@csrf
<table> 
<tr>
<td>KODE</td>
<td><input type="text" name="jemaat_kode" value="{{ $row->jemaat_kode }}"></td>
</tr> 
<tr>
<td>NAMA</td>
<td><input type="text" name="jemaat_nama" value="{{ $row->jemaat_nama }}"></td>
</tr>
<tr>
<td>STATUS</td> 
<td>
    <select name="jemaat_status" class="form-control">
    <option value="">-- Pilih Jurusan --</option>
    <option value="Remaja">Remaja</option>
    <option value="Dewasa">Dewasa</option>
    <option value="Lansia">Lansia</option>
</td>
<tr>
<td>ALAMAT</td>
<td><input type="text" name="jemaat_alamat" value="{{ $row->jemaat_alamat }}"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="UPDATE"></td>
</tr> 
</table>
</form> 
</div> 

@endsection
