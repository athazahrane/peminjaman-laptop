<!DOCTYPE html>
<html>
<head>
    <title>Edit Peminjaman Laptop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Peminjaman Laptop</h1>

        <form action="{{ route('peminjaman.update', $peminjamanLaptop) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="laptop_id">Laptop:</label>
                <select name="laptop_id" id="laptop_id" class="form-control">
                    @foreach($laptops as $laptop)
                    <option value="{{ $laptop->id }}" {{ $laptop->id == $peminjamanLaptop->laptop_id ? 'selected' : '' }}>{{ $laptop->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="borrower_id">Peminjam:</label>
                <select name="borrower_id" id="borrower_id" class="form-control">
                    @foreach($borrowers as $borrower)
                    <option value="{{ $borrower->id }}" {{ $borrower->id == $peminjamanLaptop->borrower_id ? 'selected' : '' }}>{{ $borrower->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" value="{{ $peminjamanLaptop->tanggal_peminjaman }}">
            </div>
            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control" value="{{ $peminjamanLaptop->tanggal_pengembalian }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
