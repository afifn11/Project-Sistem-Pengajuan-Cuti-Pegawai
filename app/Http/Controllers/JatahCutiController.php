<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JatahCuti;

class JatahCutiController extends Controller
{
    public function index()
    {
        $jatahCuti = JatahCuti::all();
        return view('admin.jatah_cuti.index', compact('jatahCuti'));
    }

    public function create()
    {
        return view('admin.jatah_cuti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'nullable|string|max:20',
        ]);

        JatahCuti::create($request->all());

        return redirect()->route('jatah_cuti.index')->with('success', 'Jatah Cuti berhasil ditambahkan.');
    }

    public function edit(JatahCuti $jatahCuti)
    {
        return view('admin.jatah_cuti.edit', compact('jatahCuti'));
    }

    public function update(Request $request, JatahCuti $jatahCuti)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'nullable|string|max:20',
        ]);

        $jatahCuti->update($request->all());

        return redirect()->route('jatah_cuti.index')->with('success', 'Jatah Cuti berhasil diperbarui.');
    }

    public function destroy(JatahCuti $jatahCuti)
    {
        $jatahCuti->delete();
        return redirect()->route('jatah_cuti.index')->with('success', 'Jatah Cuti berhasil dihapus.');
    }

    // Tambahkan metode untuk menampilkan jatah cuti pegawai
    public function showJatahCutiPegawai()
    {
        $user = auth()->user();
        $jatahCuti = JatahCuti::where('nip', $user->nip)->first();
        return view('admin.pengajuan_cuti.jatah_cuti', compact('jatahCuti'));
    }
}
