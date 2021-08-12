<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = 'pengalaman';
    protected $fillable = [
        'deksripsi',
        'nama_instansi',
        'kota_instansi',
        'mulai_belajar',
        'selesai_belajar',
        'nama_org',
        'mulai_org',
        'selesai_org',
        'prestasi',
        'bulantahun',
        'jabatan',
        'perusahaan',
        'mulai_kerja',
        'selesai_kerja',
    ];
}
