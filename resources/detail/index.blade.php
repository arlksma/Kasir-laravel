@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Admin</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/transaksidetail/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Transaksi Detail</th>
        <th>Id Barang</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($detail as $row)
    <tr>
        <td>{{ $row->id_transaksi_detail }}</td>
        <td>{{ $row->barang_nama }}</td>
        <td>{{ $row->transaksi_jenis }}</td>
        <td>{{ $row->transaksi_harga }}</td>
        <td>{{ $row->transaksi_jumlah }}</td>
        <td>{{ $row->transaksi_detail_status }}</td>
        <td>
            <a href="/transaksidetail/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/transaksidetail/{{$row->id}}" method="POST">
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