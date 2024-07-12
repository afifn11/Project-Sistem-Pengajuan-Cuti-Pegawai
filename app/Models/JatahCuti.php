<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JatahCuti extends Model
{
    use HasFactory;

    protected $table = 'jatah_cuti';

    protected $fillable = [
        'tahun', 'jumlah', 'nip',
    ];

    public $timestamps = false;
}
