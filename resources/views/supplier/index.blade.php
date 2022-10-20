@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data supplier</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/supplier/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id supplier</th>
        <th>supplier_nama</th>
        <th>supplier_alamat</th>
        <th>supplier_phone</th>
        <th>supplier_status</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($supplier as $row)
    <tr>
        <td>{{ $row->id_supplier}}</td>
        <td>{{ $row->supplier_nama }}</td>
        <td>{{ $row->supplier_alamat}}</td>
        <td>{{ $row->supplier_phone }}</td>
        <td>{{ $row->supplier_status }}</td>
        <td>
            <a href="/supplier/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/supplier/{{$row->id}}" method="POST">
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