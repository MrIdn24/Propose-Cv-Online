<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadiri extends Model
{
    use HasFactory;
    protected $table = 'datadiris';
    protected $fillable = [
        'foto',
        'nama_depan',
        'nama_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        // 'agama',
        'status_perkawinan',
        'email',
        'no_telp',
        'alamat',
        // 'kota',
        // 'negara',
    ];
    public function pengalaman()
    {
        return $this->hasOne(Datadiri::class);
    }
}
