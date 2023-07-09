@extends('layouts.app')

@section('content')

<div class="container">
<h3>Tambah Data Jemaat</h3>
<form action="{{ url('/jemaat') }}" method="post">
@csrf
<table>
<tr>
<td>KODE</td>
<td><input type="text" name="jemaat_kode"></td>
</tr>
<tr>
<td>NAMA</td>
<td><input type="text" name="jemaat_nama"></td>
</tr>
<tr><td>STATUS</td>
<td>
    <select name="jemaat_status" class="form-control">
    <option value="">-- Pilih Status --</option>
    <option value="Remaja">Remaja</option>
    <option value="Dewasa">Dewasa</option>
    <option value="Lansia">Lansia</option>
    </td>
</tr>
<tr>
<td>ALAMAT</td>
<td><input type="text" name="jemaat_alamat"></td> 
</tr>
<tr>  
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</div>
@endsection