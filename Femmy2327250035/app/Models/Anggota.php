<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota'; 
    protected $fillable = [
        'Nama_Anggota',
        'Alamat',
        'jurusan',
        'tgl_daftar',
    ];

    protected $guarded = [];

    protected $dates = [
        'tgl_daftar',
        'created_at',
        'updated_at',
    ];

    public function Peminjaman()
    {
        return $this->hasMany(peminjaman::class, 'ID_Anggota', 'ID_Anggota');
    }
}