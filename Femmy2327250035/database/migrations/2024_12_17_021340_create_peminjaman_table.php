<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id(); 
            $table->string('no_peminjaman'); 
            $table->unsignedBigInteger('ID_Anggota');
            $table->unsignedBigInteger('ID_Buku'); 
            $table->date('Tanggal_Pinjam'); 
            $table->date('Tanggal_Kembali')->nullable();
            $table->decimal('Denda', 8, 2)->default(0); 
            $table->timestamps(); 

            $table->foreign('ID_Anggota')->references('ID_Anggota')->on('anggota')->onDelete('cascade');
            $table->foreign('ID_Buku')->references('ID_Buku')->on('buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}