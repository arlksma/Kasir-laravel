@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data admin</h3>
</div>

<form method="POST" action="/admin/store">
	 @csrf

<div class="form-group">
	<label for="">username</label>
	<input type="text" name="username" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">password</label>
	<input type="text" name="password" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">level</label>
	<input type="text" name="admin_lavel" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">admin nama</label>
	<input type="text" name="admin_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">admin status</label>
	<input type="text" name="admin_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection