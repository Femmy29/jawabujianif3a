<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman'; 
    protected $fillable = [
        'no_peminjaman', 
        'ID_Anggota', 
        'ID_Buku', 
        'Tanggal_Pinjam', 
        'Tanggal_Kembali', 
        'Denda',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'ID_Anggota');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'ID_Buku');
    }
}