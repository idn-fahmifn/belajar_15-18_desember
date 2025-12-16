<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }

    public function success()
    {
        return view('umur.success');
    }

    public function proses(Request $request)
    {
        

        $request->validate([
            'name' => ['string', 'min:3', 'max:20', 'required'],
            'age' => ['integer', 'min:1', 'max:99', 'required']
        ], [
            // custom pesan error.
            'name.string' => 'Nama berupa karakter',
            'name.min' => 'Nama minimal 3 karakter',
            'name.max' => 'Nama maksimal 20 karakter',
            'name.required' => 'Nama wajib diisi',

            'age.integer' => 'Umur berupa angka',
            'age.min' => 'Umur minimal 1 tahun',
            'age.max' => 'Umur maksimal 99 tahun',
            'age.required' => 'Umur wajib diisi',
        ]);

        $request->session()->put('umur', $request->input('age'));
        return redirect()->route('umur.success');

    }

}
