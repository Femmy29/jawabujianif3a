<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Peminjaman</h2>
 
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Detail Peminjaman</a>
    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>

    <a href="/" class="btn btn-secondary mb-3">Beranda</a>

 
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

   
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No. Pinjam</th>
                <th>Nama Anggota</th>
                <th>Nama Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Peminjaman as $Peminjaman)
                <tr>
                    <td>{{ $Peminjaman->No_Peminjaman }}</td>
                    <td>{{ $Peminjaman->anggota->Nama_Anggota }}</td>
                    <td>{{ $Peminjaman->buku->Nama_Buku }}</td>
                    <td>{{ $Peminjaman->Tanggal_Pinjam }}</td>
                    <td>{{ $Peminjaman->Tanggal_Kembali ?? 'Belum Kembali' }}</td>
                    <td>
                       
                        <a href="{{ route('peminjaman.edit', $Peminjaman->No_Peminjaman) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        
                        <form action="{{ route('peminjaman.destroy',$Peminjaman->No_Peminjaman) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
