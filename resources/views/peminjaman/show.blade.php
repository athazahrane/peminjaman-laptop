<!DOCTYPE html>
<html>
<head>
    <title>Detail Peminjaman Laptop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Detail Peminjaman Laptop</h1>

        <p><strong>ID:</strong> {{ $peminjamanLaptop->id }}</p>
        <p><strong>Laptop:</strong> {{ $peminjamanLaptop->laptop->nama }}</p>
        <p><strong>Peminjam:</strong> {{ $peminjamanLaptop->borrower->nama }}</p>
        <p><strong>Tanggal Peminjaman:</strong> {{ $peminjamanLaptop->tanggal_peminjaman }}</p>
        <p><strong>Tanggal Pengembalian:</strong> {{ $peminjamanLaptop->tanggal_pengembalian }}</p>
        <!-- tambahkan informasi lainnya sesuai kebutuhan -->

        <a href="{{ route('peminjaman.edit', $peminjamanLaptop) }}" class="btn btn-info">Edit</a>
        <form action="{{ route('peminjaman.destroy', $peminjamanLaptop) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peminjaman laptop ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</body>
</html>
