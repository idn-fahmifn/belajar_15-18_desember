<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory;

    //jika nama tabelnya singular, wajib definiskan nama tabelnya.
    protected $table = 'barang'; 

    protected $fillable = [
        'nama_barang', 'kode_barang', 'stok', 'kategori'
    ];



}
