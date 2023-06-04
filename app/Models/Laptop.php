<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = ['brand', 'model', 'serial_number'];

    // Hubungan dengan peminjaman laptop
    public function borrowings()
    {
        return $this->hasMany(LaptopBorrowing::class);
    }
}
