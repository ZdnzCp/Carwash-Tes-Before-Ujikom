<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carwash extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaPaket',
        'harga',
        'nama',
        'noTelp',
        'nominal'

    ];

    function paket()
    {
        return $this->hasMany(paket::class);
    }
}
