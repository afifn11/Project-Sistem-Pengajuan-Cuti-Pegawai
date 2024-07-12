<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;

class AdminController extends Controller
{
    public function index()
    {
        $totalCuti = PengajuanCuti::count();
        $approvedCuti = PengajuanCuti::where('status', 'Y')->count();
        $rejectedCuti = PengajuanCuti::where('status', 'N')->count();

        return view('admin.dashboard', compact('totalCuti', 'approvedCuti', 'rejectedCuti'));
    }
}
