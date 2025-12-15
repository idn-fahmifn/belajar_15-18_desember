<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return "ini adalah halaman index barang";
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
