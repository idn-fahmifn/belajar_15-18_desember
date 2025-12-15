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
        $request->session()->put('umur', $request->input('age'));
        return redirect()->route('umur.success');
    }

}
