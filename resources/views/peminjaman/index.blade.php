<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman Laptop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Peminjaman Laptop</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Laptop</th>
                    <th>Peminjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peminjamanLaptops as $peminjamanLaptop)
                <tr>
                    <td>{{ $peminjamanLaptop->id }}</td>
                    <td>{{ $peminjamanLaptop->laptop->nama }}</td>
                    <td>{{ $peminjamanLaptop->borrower->nama }}</td>
                    <td>{{ $peminjamanLaptop->tanggal_peminjaman }}</td>
                    <td>{{ $peminjamanLaptop->tanggal_pengembalian }}</td>
                    <td>
                        <a href="{{ route('peminjaman.show', $peminjamanLaptop) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('peminjaman.edit', $peminjamanLaptop) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('peminjaman.destroy', $peminjamanLaptop) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peminjaman laptop ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Tambah Peminjaman Laptop</a>
    </div>
</body>
</html>
