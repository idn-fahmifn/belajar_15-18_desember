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
        ]);

        $request->session()->put('umur', $request->input('age'));
        return redirect()->route('umur.success');

    }

}
