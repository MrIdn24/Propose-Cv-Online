<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = 'pengalamans';
    protected $fillable = [
        'deksripsi',
        'nama_instansi',
        'kota_instansi',
        'mulai_belajar',
        'selesai_belajar',
        'hobi',
        'skill',
        'skill_persen',
        'jabatan',
        'perusahaan',
        'mulai_kerja',
        'selesai_kerja',
    ];
}
