@extends('layouts.master')

@section('title', 'Hapus {{ ucfirst($mahasiswa) }}')

@section('content')
<div class="card card-danger">
  <div class="card-header">
    <h3 class="card-title">Konfirmasi Hapus</h3>
  </div>
  <div class="card-body">
    <p>Yakin ingin menghapus {{ $item->nama ?? $item->judul ?? '-' }}?</p>
    <form action="{{ route('$mahasiswa.destroy', $item->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Hapus</button>
      <a href="{{ route('$mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
