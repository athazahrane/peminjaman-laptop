<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman Laptop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Peminjaman Laptop</h1>

        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="laptop_id">Laptop:</label>
                <select name="laptop_id" id="laptop_id" class="form-control">
                    @foreach($laptops as $laptop)
                    <option value="{{ $laptop->id }}">{{ $laptop->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="borrower_id">Peminjam:</label>
                <select name="borrower_id" id="borrower_id" class="form-control">
                    @foreach($borrowers as $borrower)
                    <option value="{{ $borrower->id }}">{{ $borrower->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
