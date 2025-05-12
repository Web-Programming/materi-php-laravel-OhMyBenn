@extends('layouts.master')

@section('title', 'Daftar {{ ucfirst($prodi) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Daftar {{ ucfirst($prodi) }}</h3>
    <a href="{{ route('$prodi.create') }}" class="btn btn-primary float-right">Tambah</a>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        @foreach(${{ $prodi }} as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nama ?? $item->judul ?? '-' }}</td>
          <td>
            <a href="{{ route('$prodi.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('$prodi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="{{ route('$prodi.destroy', $item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
