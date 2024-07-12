<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_cuti';

    protected $fillable = [
        'tanggal_awal', 'tanggal_akhir', 'jumlah', 'ket', 'status', 'nip'
    ];

    public $timestamps = false; // Menonaktifkan timestamps
}

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class PengajuanCuti extends Model
// {
//     use HasFactory;

//     protected $table = 'pengajuan_cuti';

//     protected $fillable = [
//         'tanggal_awal', 'tanggal_akhir', 'jumlah', 'ket', 'status', 'nip'
//     ];

//     public $timestamps = false; // Menonaktifkan timestamps

//     // Definisikan hubungan dengan model Pegawai
//     public function pegawai()
//     {
//         return $this->belongsTo(Pegawai::class, 'nip', 'nip');
//     }
// }

