@extends('layout/main0226')

@section('title', 'Form Data Dokter')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Dokter </h1>
    <form method="post" action="/kamar0226">
    @csrf
  <div class="form-group">
    <label for="id_pasien">id_pasien</label>
    <input type="text" class="form-control @error('id_pasien') is-invalid @enderror" id="id_pasien" placeholder="Masukkan ID pasien" name="id_pasien">
    @error('id_pasien')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="id_dokter">id_dokter</label>
    <input type="text" class="form-control @error('id_dokter') is-invalid @enderror" id="id_dokter" placeholder="Masukkan ID dokter" name="id_dokter">
    @error('id_dokter')
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