<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanLaptopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peminjaman', [PeminjamanLaptopController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanLaptopController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanLaptopController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{peminjamanLaptop}', [PeminjamanLaptopController::class, 'show'])->name('peminjaman.show');
Route::get('/peminjaman/{peminjamanLaptop}/edit', [PeminjamanLaptopController::class, 'edit'])->name('peminjaman.edit');
Route::put('/peminjaman/{peminjamanLaptop}', [PeminjamanLaptopController::class, 'update'])->name('peminjaman.update');
Route::delete('/peminjaman/{peminjamanLaptop}', [PeminjamanLaptopController::class, 'destroy'])->name('peminjaman.destroy');



