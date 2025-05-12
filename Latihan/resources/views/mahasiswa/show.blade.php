@extends('layouts.master')

@section('title', 'Detail {{ ucfirst($mahasiswa) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail {{ ucfirst($mahasiswa) }}</h3>
  </div>
  <div class="card-body">
    <p><strong>NPM:</strong> {{ $item->id }}</p>
    <p><strong>Nama:</strong> {{ $item->nama ?? $item->judul ?? '-' }}</p>
    <a href="{{ route('$mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection
