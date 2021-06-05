@extends('layout/main0226')

@section('title', 'Data Dokter')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Dokter</h1>
    <a class="btn btn-primary" href="/tambahdokter0226" role="button">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Aksi</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($dokter as $dkt)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dkt->nama}}</td>
      <td>{{$dkt->jabatan}}</td>
      <td>
      <a class="btn btn-primary" href="/dokter/{{$dkt->id}}" role="button">Edit</a>
      <a class="btn btn-danger" href="#" role="button">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   
