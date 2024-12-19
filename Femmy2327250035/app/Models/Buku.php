<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku'; 

    protected $fillable = [
        'Nama_Buku',
        'penerbit',
        'Pengarang',
        'Jumlah',
    ];

    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function Peminjaman()
    {
        return $this->hasMany(peminjaman::class, 'ID_Buku', 'ID_Buku');
    }
}