@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data barng</h3>
</div>

<form method="POST" action="/barang/store">
	 @csrf

<div class="form-group">
	<label for="">barang kode</label>
	<input type="text" name="barang_kode" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">barang nama</label>
	<input type="text" name="barang_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">id jenis</label>
	<select name="id_jenis" id="" class="form-control">
		<option value="" >Silahkan Dipilih</option>
		@foreach ($jenis as $row)
		<option value="{{$row->id_jenis}}" >{{$row->jenis_nama}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="">id supplier</label>
	<select name="id_supplier" id="" class="form-control">
		<option value="" >Silahkan Dipilih</option>
		@foreach ($supplier as $row)
		<option value="{{$row->id_supplier}}" >{{$row->supplier_nama}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="">harga jual</label>
	<input type="text" name="harga_jual" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">barang status</label>
	<input type="text" name="barang_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection