@extends('layouts.admin')

@section('judul')
Data Pelanggan
@endsection


@section('tabel')

<div class="p-3">
    <a href="{{route('pelanggan.create')}}" class="btn btn-primary my-3">Tambah Data Pelanggan</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($pelanggans as $pelanggan )
            <tr>
                <td>{{$pelanggan->nama_pelanggan}}</td>
                <td>{{$pelanggan->umur_pelanggan}}</td>
                <td>{{$pelanggan->alamat_pelanggan}}</td>
                <td>
                    <a href="{{route('pelanggan.edit', $pelanggan->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('pelanggan.destroy', $pelanggan->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('pelanggan.show' , $pelanggan->id )}}" class = " btn btn-sm btn-info">Show</a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
