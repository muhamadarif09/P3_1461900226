@extends('layout/main0226')

@section('title', 'Form Data')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Kamar </h1>
    <form method="post" action="{{url('kamar/' . $kamar->id)}}">
    @csrf
    <input type="hidden" name="_method" value="patch" >
  <div class="form-group">
    <label for="id_pasien">ID Pasien</label>
    <input type="text" class="form-control @error('id_pasien') is-invalid @enderror" id="id_pasien" placeholder="Masukkan Nama" name="id_pasien" value="{{ $kamar -> id_pasien}}">
    @error('id_pasien')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="nbi">ID Dokter</label>
    <input type="text" class="form-control @error('id_dokter') is-invalid @enderror" id="id_dokter" placeholder="Masukkan id_dokter" name="id_dokter" value="{{ $kamar -> id_dokter}}">
    @error('id_dokter')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary my-2">Simpan</button>
  
</form>
   
    </div>
    </div>
    </div>
@endsection   