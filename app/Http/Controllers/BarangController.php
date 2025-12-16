<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    public function about()
    {
        return "ini adalah halaman about barang";
    }
    public function detail($param)
    {
        // $data = Barang::findOrFail($param); //mencari id yang dpilih.
        // recomended* panggil berdasarkan column yang unique (slug, kode lainnya.)
        $data = Barang::where('kode_barang', $param)->first();
        return view('barang.detail', compact('data'));
    }

}
