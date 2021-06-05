@extends('layout/main0226')

@section('title', 'Data Pasien')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Pasien</h1>
    <a class="btn btn-primary" href="/tambahpasien0226" role="button">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($pasien as $psn)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$psn->nama}}</td>
      <td>{{$psn->alamat}}</td>
      <td>
      <a class="btn btn-primary" href="" role="button">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   
