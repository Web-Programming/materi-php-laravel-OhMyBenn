@extends('layouts.master')

@section('title', 'Daftar {{ ucfirst($mahasiswa) }}')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Daftar {{ ucfirst($mahasiswa) }}</h3>
    <a href="{{ route('$mahasiswa.create') }}" class="btn btn-primary float-right">Tambah</a>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NPM</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        @foreach(${{ $mahasiswa }} as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nama ?? $item->judul ?? '-' }}</td>
          <td>
            <a href="{{ route('$mahasiswa.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('$mahasiswa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="{{ route('$mahasiswa.destroy', $item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
