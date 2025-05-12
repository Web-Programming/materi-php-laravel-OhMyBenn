@extends('layouts.master')

@section('title', 'Detail {{ ucfirst($prodi) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail {{ ucfirst($prodi) }}</h3>
  </div>
  <div class="card-body">
    <p><strong>ID:</strong> {{ $item->id }}</p>
    <p><strong>Nama:</strong> {{ $item->nama ?? $item->judul ?? '-' }}</p>
    <a href="{{ route('$prodi.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection
