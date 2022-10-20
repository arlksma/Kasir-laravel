@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data barang</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/barang/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id_barang</th>
        <th>barang_kode</th>
        <th>barang_nama</th>
        <th>id_jenis</th>
        <th>id_supplier</th>
        <th>harga_jual</th>
        <th>barang_status</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($barang as $row)
    <tr>
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->barang_kode }}</td>
        <td>{{ $row->barang_nama }}</td>
        <td>{{ $row->jenis_nama }}</td>
        <td>{{ $row->supplier_nama }}</td>
        <td>{{ $row->harga_jual }}</td>
        <td>{{ $row->barang_status }}</td>
        <td>
            <a href="/barang/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/barang/{{$row->id}}" method="POST">
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