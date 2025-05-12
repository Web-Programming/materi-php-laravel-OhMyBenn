@extends('layouts.master')

@section('title', 'Tambah {{ ucfirst($dosen) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Tambah {{ ucfirst($dosen) }}</h3>
  </div>
  <div class="card-body">
    <form action="{{ route('$dosen.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="{{ route('$dosen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
