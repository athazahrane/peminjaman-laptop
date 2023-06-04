<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaptopBorrowing extends Model
{
    protected $fillable = ['laptop_id', 'borrower_id', 'borrowed_at', 'returned_at'];

    // Hubungan dengan laptop
    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }

    // Hubungan dengan peminjam
    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }
}
