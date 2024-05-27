@extends('layouts.admin')

@section('judul', 'Tambah Profil Pelanggan')

@section('content')
<form action="{{route('pelanggan.store')}}" method="POST">
    @csrf
<div class="form-group p-3">
    <label>Nama Lengkap</label>
    <input type="name" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Lengkap">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Umur</label>
        <input type="name" name="umur_pelanggan" class="form-control" placeholder="Masukkan Umur">
            @error('umur_pelanggan')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Alamat</label>
        <input type="name" name="alamat_pelanggan" class="form-control" placeholder="Masukkan Jenis Kelamin">
            @error('alamat_pelanggan')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="p-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
