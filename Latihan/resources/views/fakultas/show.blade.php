@extends('layouts.master')

@section('title', 'Detail {{ ucfirst($fakultas) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail {{ ucfirst($fakultas) }}</h3>
  </div>
  <div class="card-body">
    <p><strong>ID:</strong> {{ $item->id }}</p>
    <p><strong>Nama:</strong> {{ $item->nama ?? $item->judul ?? '-' }}</p>
    <a href="{{ route('$fakultas.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection
