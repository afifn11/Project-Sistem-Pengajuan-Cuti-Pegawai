<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    public $timestamps = false; // Menonaktifkan timestamps

    protected $fillable = ['nip', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_id'];
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Pegawai extends Model
// {
//     protected $table = 'pegawai';
//     protected $primaryKey = 'nip';
//     public $incrementing = false;
//     public $timestamps = false; // Menonaktifkan timestamps

//     protected $fillable = ['nip', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_id'];

//     // Definisikan hubungan dengan model PengajuanCuti
//     public function pengajuanCuti()
//     {
//         return $this->hasMany(PengajuanCuti::class, 'nip', 'nip');
//     }
// }


