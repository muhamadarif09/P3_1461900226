@extends('layout/main0226')

@section('title', 'Form Data')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Pasien </h1>
    <form method="post" action="/pasien0226">
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
    @error('nama')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="nbi">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat" name="alamat">
    @error('alamat')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary my-2">Tambah</button>
  
</form>
   
    </div>
    </div>
    </div>
@endsection   