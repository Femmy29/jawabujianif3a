<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <!-- Menggunakan CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Edit Buku</h2>

    <form action="{{ route('buku.update', $buku->ID_Buku) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nama_Buku" class="form-label">Nama Buku</label>
            <input type="text" name="Nama_Buku" id="Nama_Buku" value="{{ $buku->Nama_Buku }}" class="form-control @error('Nama_Buku') is-invalid @enderror">
            @error('Nama_Buku')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}" class="form-control @error('penerbit') is-invalid @enderror">
            @error('penerbit')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Pengarang" class="form-label">Pengarang</label>
            <input type="text" name="Pengarang" id="Pengarang" value="{{ $buku->Pengarang }}" class="form-control @error('Pengarang') is-invalid @enderror">
            @error('Pengarang')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Jumlah" class="form-label">Jumlah</label>
            <input type="number" name="Jumlah" id="Jumlah" value="{{ $buku->Jumlah }}" class="form-control @error('Jumlah') is-invalid @enderror">
            @error('Jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
