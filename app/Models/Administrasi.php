<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    protected $fillable = [
    'kode_pesanan',
    'nama_pelanggan',
    'tanggal_pengantaran',
    'tanggal_pengambilan',
    'jumlah_kg',
    'total_harga',
    'status',
];
}
