<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // Menampilkan form untuk menambah peminjaman
    public function create()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        return view('Peminjaman.create', compact('anggota', 'buku'));
    }

    // Menyimpan data detail peminjaman
    public function store(Request $request)
    {
        $validated = $request->validate([
            'No_Peminjaman' => 'required|unique:peminjaman,no_peminjaman',
            'ID_Anggota' => 'required|exists:anggota,ID_Anggota',
            'ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Pinjam' => 'required|date',
            'Tanggal_Kembali' => 'nullable|date',
            'Denda' => 'nullable|numeric',
        ]);
    
        // Menyimpan data peminjaman
        $Peminjaman = new Peminjaman();
        $Peminjaman->No_Peminjaman = $request->No_Peminjaman;
        $Peminjaman->ID_Anggota = $request->ID_Anggota;
        $Peminjaman->ID_Buku = $request->ID_Buku;
        $Peminjaman->Tanggal_Pinjam = $request->Tanggal_Pinjam;
        $Peminjaman->Tanggal_Kembali = $request->Tanggal_Kembali;
        $Peminjaman->Denda = $request->Denda;
        $Peminjaman->save();
    
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan');

    }
    

    // Menampilkan semua detail peminjaman
    public function index()
    {
        $Peminjaman = Peminjaman::with('anggota', 'buku')->get();
        return view('Peminjaman.index', compact('Peminjaman'));
    }
}