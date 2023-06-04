<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = ['name', 'email'];

    // Hubungan dengan peminjaman laptop
    public function borrowings()
    {
        return $this->hasMany(LaptopBorrowing::class);
    }
}
