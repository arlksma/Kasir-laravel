@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Admin</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/admin/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Admin</th>
        <th>Username</th>
        <th>Paasword</th>
        <th>Level</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($admin as $row)
    <tr>
        <td>{{ $row->id_admin }}</td>
        <td>{{ $row->username }}</td>
        <td>{{ $row->password }}</td>
        <td>{{ $row->admin_lavel }}</td>
        <td>{{ $row->admin_nama }}</td>
        <td>{{ $row->admin_status }}</td>
        <td>
            <a href="/admin/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/admin/{{$row->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
  </div> 
  @endsection