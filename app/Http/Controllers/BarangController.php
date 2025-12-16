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
        return "ini adalah detail ".$param;
    }

}
