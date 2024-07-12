<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        $divisi = \App\Models\Divisi::all();
        return view('admin.pegawai.create', compact('divisi'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|max:20|unique:pegawai,nip',
            'gender' => 'required|string|max:1',
            'tmp_lahir' => 'nullable|string|max:45',
            'tgl_lahir' => 'nullable|date',
            'telpon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string|max:255',
            'divisi_id' => 'required|integer|exists:divisi,id',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }



    public function edit(Pegawai $pegawai)
    {
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nip' => 'required|string|max:20|unique:pegawai,nip,' . $pegawai->nip . ',nip',
            'gender' => 'required|in:L,P',
            'tmp_lahir' => 'nullable|string|max:45',
            'tgl_lahir' => 'nullable|date',
            'telpon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:100',
            'divisi_id' => 'nullable|integer|exists:divisi,id',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }
    
}
