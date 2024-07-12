<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengajuanCuti = PengajuanCuti::all(); // Tampilkan semua pengajuan cuti untuk admin

        return view('admin.home', compact('pengajuanCuti'));
    }

}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\PengajuanCuti;
// use Illuminate\Support\Facades\Auth;

// class DashboardController extends Controller
// {
//     public function indexAdmin()
//     {
//         $pengajuanCuti = PengajuanCuti::with('pegawai')->get(); // Mengambil semua pengajuan cuti dengan relasi pegawai

//         return view('admin.dashboard', compact('pengajuanCuti'));
//     }

//     public function indexPegawai()
//     {
//         $user = Auth::user();
//         $pengajuanCuti = PengajuanCuti::where('nip', $user->nip)->get();

//         return view('admin.home', compact('pengajuanCuti'));
//     }
// }
