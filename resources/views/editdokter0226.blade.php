@extends('layout/main0226')

@section('title', 'Form Data')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Dokter </h1>
    <form method="post" action="{{url('dokter/' . $dokter->id)}}">
    @csrf
    <input type="hidden" name="_method" value="patch" >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $dokter -> nama}}">
    @error('nama')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="nbi">Jabatan</label>
    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukkan jabatan" name="jabatan" value="{{ $dokter -> jabatan}}">
    @error('jabatan')
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