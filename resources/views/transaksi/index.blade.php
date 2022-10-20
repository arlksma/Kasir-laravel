@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data transaksi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/transaksi/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id tarnsaksi</th>
        <th>id admin</th>
        <th>transaksi tanggal</th>
        <th>transaksi nota</th>
        <th>transaksi status</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $row)
    <tr>
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->id_admin }}</td>
        <td>{{ $row->transaksi_tanggal }}</td>
        <td>{{ $row->transaksi_nota }}</td>
        <td>{{ $row->transaksi_status }}</td>
       
        <td>
            <a href="/detail/{{ $row->id_transaksi }}"><button class="btn btn-primary">detail</button></a> 
            <a href="/transaksi/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/transaksi/{{$row->id}}" method="POST">
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
