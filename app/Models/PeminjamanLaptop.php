<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanLaptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'laptop_id',
        'borrower_id',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        // tambahkan kolom lainnya sesuai kebutuhan
    ];

    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }
}
