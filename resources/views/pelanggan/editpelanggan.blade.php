@extends('layouts.admin')

@section('judul')
Edit Pelanggan
@endsection


@section('tabel')
<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">

@csrf
@method('PUT')
<div class="mb-3">
    <label class="form-label">nama</label>
    <input type="name" class="form-control @error('nama_pelanggan')
    is-invalid
    @enderror"
        name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
    @error('nama_pelanggan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label">umur pelanggan</label>
    <input type="name" class="form-control @error('umur_pelanggan')
    is-invalid
    @enderror"
        name="umur_pelanggan" value="{{ $pelanggan->umur_pelanggan }}">
    @error('umur_pelanggan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="name" class="form-control @error('alamat_pelanggan')
    is-invalid
    @enderror"
        name="alamat_pelanggan" value="{{ $pelanggan->alamat_pelanggan}}">
    @error('alamat_pelanggan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Perbarui Kategori</button>
</form>

@endsection
