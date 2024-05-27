<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePelangganRequest;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.indexpelanggan', compact('pelanggans'));
    }

    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.detailpelanggan', compact('pelanggan'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.tambahpelanggan', compact('pelanggans'));
    }

    public function store(StorePelangganRequest $request)
    {
        $data = $request->validated();
       if(Pelanggan::create($data)){
           return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan');
       }
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus');
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.editpelanggan', compact('pelanggan'));
    }

    public function update(StorePelangganRequest $request, Pelanggan $pelanggan)
    {
        $data = $request->validated();
        $pelanggan->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diupdate');
    }
}
