@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Edit Data admin </h3>
</div>

<form method="POST" action="/admin/{{$admin->id}}">
	 @csrf
	 @method('put')
<div class="card-body">
<div class="form-group">
	<label for="">Id admin</label>
	<input type="text" value="{{$admin->id_admin}}" name="id_admin" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">username</label>
	<input type="text" value="{{$admin->username}}"name="username" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">password</label>
	<input type="text" value="{{$admin->password}}" name="password" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">level</label>
	<input type="text" value="{{$admin->admin_lavel}}" name="admin_lavel" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" value="{{$admin->admin_nama}}"name="admin_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" value="{{$admin->admin_status}}"name="admin_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection