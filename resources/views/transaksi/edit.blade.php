@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Edit Data transaksi </h3>
</div>

<form method="POST" action="/transaksi/{{$transaksi->id}}">
	 @csrf
	 @method('put')
<div class="card-body">
<div class="form-group">
	<label for="">Id transaksi</label>
	<input type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id admin </label>
	<input type="text" value="{{$transaksi->id_admin}}"name="id_admin" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi tanggal</label>
	<input type="date" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">transaksi phone </label>
	<input type="text" value="{{$transaksi->transaksi_nota}}" name="transaksi_nota" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for=""> transaksi Status</label>
	<input type="text" value="{{$transaksi->transaksi_status}}"name="transaksi_status" class="form-control" id="" placeholder="">
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection