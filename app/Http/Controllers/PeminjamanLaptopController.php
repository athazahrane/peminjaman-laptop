<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Models\Borrower;
use App\Models\PeminjamanLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanLaptopController extends Controller
{
    // Menampilkan daftar peminjaman laptop
    public function index()
    {
        
        return view('peminjaman.index', compact('peminjamanLaptops'));
    }

    // Menampilkan form peminjaman laptop
    public function create()
    {
        $laptops = Laptop::all();
        $borrowers = Borrower::all();
        return view('peminjaman.create', compact('laptops', 'borrowers'));
    }

    // Menyimpan data peminjaman laptop baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'laptop_id' => 'required',
            'borrower_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        PeminjamanLaptop::create($data);

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman laptop created successfully.');
    }

    // Menampilkan detail peminjaman laptop
    public function show(PeminjamanLaptop $peminjamanLaptop)
    {
        return view('peminjaman.show', compact('peminjamanLaptop'));
    }

    // Menampilkan form edit peminjaman laptop
    public function edit(PeminjamanLaptop $peminjamanLaptop)
    {
        $laptops = Laptop::all();
        $borrowers = Borrower::all();
        return view('peminjaman.edit', compact('peminjamanLaptop', 'laptops', 'borrowers'));
    }

    // Memperbarui data peminjaman laptop
    public function update(Request $request, PeminjamanLaptop $peminjamanLaptop)
    {
        $data = $request->validate([
            'laptop_id' => 'required',
            'borrower_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $peminjamanLaptop->update($data);

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman laptop updated successfully.');
    }

    // Menghapus peminjaman laptop
    public function destroy(PeminjamanLaptop $peminjamanLaptop)
    {
        $peminjamanLaptop->delete();

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman laptop deleted successfully.');
    }
}
