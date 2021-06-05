@extends('layout/main0226')

@section('title', 'Data Kamar')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Dokter</h1>
    <a class="btn btn-primary" href="/tambahkamar0226" role="button">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">id pasien</th>
      <th scope="col">id Dokter</th>
      <th scope="col">Aksi</th>

     
    </tr>
  </thead>
  <tbody>
  @foreach($kamar as $kmr)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kmr->id_pasien}}</td>
      <td>{{$kmr->id_dokter}}</td>
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
   
