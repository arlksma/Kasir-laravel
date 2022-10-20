@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data transaksi</h3>
</div>

<form method="POST" action="/transaksi/store">
	 @csrf
<div class="card-body">

<div class="form-group">
	<label for="">id admin</label>
	<input type="text" name="id_admin" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi tanggal</label>
	<input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi nota</label>
	<input type="text" name="transaksi_nota" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi status</label>
	<input type="text" name="transaksi_status" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">id barang</label>
	<select name="id_barang" id="" class="form-control">
		<option value="" >Silahkan Dipilih</option>
		@foreach ($barang as $row)
		<option value="{{$row->id_barang}}" >{{$row->barang_nama}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="">transaksi jenis</label>
	<input type="text" name="transaksi_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi harga</label>
	<input type="text" name="transaksi_harga" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi jumlah</label>
	<input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi detail status</label>
	<input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection