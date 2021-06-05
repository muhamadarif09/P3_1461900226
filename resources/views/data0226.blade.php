@extends('layout/main0226')

@section('title', 'Data Pasien')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Pasien</h1>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Dokter</th>
      <th scope="col">Alamat</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($kamar as $kmr)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kmr->nama_pasien}}</td>
      <td>{{$kmr->nama_dokter}}</td>
      <td>{{$kmr->alamat}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   
