<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    // Menampilkan daftar peminjam
    public function index()
    {
        $borrowers = Borrower::all();
        return view('borrowers.index', compact('borrowers'));
    }

    // Menampilkan form tambah peminjam
    public function create()
    {
        return view('borrowers.create');
    }

    // Menyimpan data peminjam baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Borrower::create($data);

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower created successfully.');
    }

    // Menampilkan detail peminjam
    public function show(Borrower $borrower)
    {
        return view('borrowers.show', compact('borrower'));
    }

    // Menampilkan form edit peminjam
    public function edit(Borrower $borrower)
    {
        return view('borrowers.edit', compact('borrower'));
    }

    // Memperbarui data peminjam
    public function update(Request $request, Borrower $borrower)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $borrower->update($data);

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower updated successfully.');
    }

    // Menghapus peminjam
    public function destroy(Borrower $borrower)
    {
        $borrower->delete();

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower deleted successfully.');
    }
}
