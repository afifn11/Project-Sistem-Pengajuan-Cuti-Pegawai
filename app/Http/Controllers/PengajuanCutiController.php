<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use Illuminate\Support\Facades\Auth;

class PengajuanCutiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengajuanCuti = PengajuanCuti::where('nip', $user->nip)->get();
        return view('admin.pengajuan_cuti.index', compact('pengajuanCuti'));
    }

    public function create()
    {
        return view('pegawai.pengajuan_cuti.create');
    }

    public function jatahCuti()
    {
        $user = Auth::user();
        $jatahCuti = JatahCuti::where('nip', $user->nip)->first();

        return view('admin.pengajuan_cuti.jatah_cuti', compact('jatahCuti'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|integer',
            'ket' => 'required|string|max:45',
            'status' => 'required|string|size:1',
            'nip' => 'required|string|max:20',
        ]);

        PengajuanCuti::create($request->all());

        return redirect()->route('pengajuan_cuti.index')->with('success', 'Pengajuan Cuti berhasil ditambahkan.');
    }

    public function edit(PengajuanCuti $pengajuanCuti)
    {
        return view('admin.pengajuan_cuti.edit', compact('pengajuanCuti'));
    }

    public function update(Request $request, PengajuanCuti $pengajuanCuti)
    {
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|integer',
            'ket' => 'nullable|string|max:45',
            'status' => 'required|string|size:1',
            'nip' => 'required|string|max:20',
        ]);

        $pengajuanCuti->update($request->all());

        return redirect()->route('pengajuan_cuti.index')->with('success', 'Pengajuan Cuti berhasil diperbarui.');
    }

    public function destroy(PengajuanCuti $pengajuanCuti)
    {
        $pengajuanCuti->delete();
        return redirect()->route('pengajuan_cuti.index')->with('success', 'Pengajuan Cuti berhasil dihapus.');
    }

    public function approve(Request $request, PengajuanCuti $pengajuanCuti)
    {
        $pengajuanCuti->update(['status' => 'Y']);
        return redirect()->route('pengajuan_cuti.index')->with('success', 'Pengajuan Cuti berhasil disetujui.');
    }

    public function reject(Request $request, PengajuanCuti $pengajuanCuti)
    {
        $pengajuanCuti->update(['status' => 'N']);
        return redirect()->route('pengajuan_cuti.index')->with('success', 'Pengajuan Cuti berhasil ditolak.');
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\PengajuanCuti;
// use Illuminate\Support\Facades\Auth;

// class PengajuanCutiController extends Controller
// {
//     public function indexAdmin()
//     {
//         $pengajuanCuti = PengajuanCuti::with('pegawai')->get();
//         return view('admin.pengajuan_cuti.index', compact('pengajuanCuti'));
//     }

//     public function indexPegawai()
//     {
//         $user = Auth::user();
//         $pengajuanCuti = PengajuanCuti::where('nip', $user->nip)->get();
//         return view('pegawai.pengajuan_cuti.index', compact('pengajuanCuti'));
//     }

//     public function create()
//     {
//         return view('pegawai.pengajuan_cuti.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'tanggal_awal' => 'required|date',
//             'tanggal_akhir' => 'required|date',
//             'jumlah' => 'required|integer',
//             'ket' => 'required|string|max:45',
//             'status' => 'required|string|size:1',
//             'nip' => 'required|string|max:20',
//         ]);

//         PengajuanCuti::create($request->all());

//         return redirect()->route('admin.home')->with('success', 'Pengajuan Cuti berhasil ditambahkan.');
//     }

//     public function edit(PengajuanCuti $pengajuanCuti)
//     {
//         return view('admin.pengajuan_cuti.edit', compact('pengajuanCuti'));
//     }

//     public function update(Request $request, PengajuanCuti $pengajuanCuti)
//     {
//         $request->validate([
//             'tanggal_awal' => 'required|date',
//             'tanggal_akhir' => 'required|date',
//             'jumlah' => 'required|integer',
//             'ket' => 'nullable|string|max:45',
//             'status' => 'required|string|size:1',
//             'nip' => 'required|string|max:20',
//         ]);

//         $pengajuanCuti->update($request->all());

//         return redirect()->route('pengajuan_cuti.indexAdmin')->with('success', 'Pengajuan Cuti berhasil diperbarui.');
//     }

//     public function destroy(PengajuanCuti $pengajuanCuti)
//     {
//         $pengajuanCuti->delete();
//         return redirect()->route('pengajuan_cuti.indexAdmin')->with('success', 'Pengajuan Cuti berhasil dihapus.');
//     }

//     public function approve(Request $request, PengajuanCuti $pengajuanCuti)
//     {
//         $pengajuanCuti->update(['status' => 'Y']);
//         return redirect()->route('pengajuan_cuti.indexAdmin')->with('success', 'Pengajuan Cuti berhasil disetujui.');
//     }

//     public function reject(Request $request, PengajuanCuti $pengajuanCuti)
//     {
//         $pengajuanCuti->update(['status' => 'N']);
//         return redirect()->route('pengajuan_cuti.indexAdmin')->with('success', 'Pengajuan Cuti berhasil ditolak.');
//     }
// }
