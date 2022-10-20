@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data jenis</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/jenis/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id_jenis</th>
        <th>jenis_nama</th>
        <th>jenis_status</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($jenis as $row)
    <tr>
        <td>{{ $row->id_jenis }}</td>
        <td>{{ $row->jenis_nama }}</td>
        <td>{{ $row->jenis_status }}</td>
       
        <td>
            <a href="/jenis/{{ $row->id }}/edit"><button class="btn btn-primary">Edit </button></a> 
            <form action="/jenis/{{$row->id}}" method="POST">
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