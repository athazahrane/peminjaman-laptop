<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    // Menampilkan daftar laptop
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index', compact('laptops'));
    }

    // Menampilkan form tambah laptop
    public function create()
    {
        return view('laptops.create');
    }

    // Menyimpan data laptop baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Laptop::create($data);

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop created successfully.');
    }

    // Menampilkan detail laptop
    public function show(Laptop $laptop)
    {
        return view('laptops.show', compact('laptop'));
    }

    // Menampilkan form edit laptop
    public function edit(Laptop $laptop)
    {
        return view('laptops.edit', compact('laptop'));
    }

    // Memperbarui data laptop
    public function update(Request $request, Laptop $laptop)
    {
        $data = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $laptop->update($data);

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop updated successfully.');
    }

    // Menghapus laptop
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop deleted successfully.');
    }
}
