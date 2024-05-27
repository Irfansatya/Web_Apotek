
@extends('layouts.admin')

@section('judul')
Data Pelanggan
@endsection


@section('tabel')
<div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="name" class="form-control" value="{{ $pelanggan->nama_pelanggan }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">umur</label>
        <input type="name" class="form-control" value="{{ $pelanggan->umur_pelanggan }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">alamat</label>
        <input type="name" class="form-control" value="{{ $pelanggan->alamat_pelanggan }}" readonly>
    </div>
</div>
<a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Kembali</a>
@endsection
