<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UmurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// memberikan name pada routing digunakan hanya untuk verb : 
//  - get, post, put/patch, delete

Route::get('profile', function () {
    return "Ini adalah respon profile";
})->name('respon-profile');

Route::get('hallo', function () {
    return "Hallo saya belajar laravel";
})->name('respon-hello');

// route parameter wajib = wajib didefinisikan parameternya.
Route::get('mobil/{param}', function ($nilai_parameter) {
    return "ini respon mobil " . $nilai_parameter;
})->name('respon-mobil');

// Route dengan parameter optional
Route::get('motor/{param?}', function ($parameter = 'honda') {
    return "ini respon motor " . $parameter;
})->name('halaman-motor');



Route::get('about', function () {
    return view('halaman.about');
})->name('about.halaman');

// rooute group 
Route::prefix('training')->group(function () {

    Route::get('laravel', function () {
        return 'Ini adalah kelas laravel';
    });

    Route::get('kotlin', function () {
        return 'Ini adalah kelas kotlin';
    });

    Route::get('halaman-index', function () {

        $saldo_awal = 5000000;
        $kebutuhan = 100000;
        $hasil = $saldo_awal - $kebutuhan;
        return view('halaman.index', [
            'saldo_awal' => $saldo_awal,
            'kebutuhan' => $kebutuhan,
            'total' => $hasil
        ]);
    })->name('index.halaman');


});

Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('about/barang', [BarangController::class, 'about'])->name('barang.about');
Route::get('about/{param}', [BarangController::class, 'detail'])->name('barang.detail');

Route::resource('kategori', KategoriController::class);


// Area routing untuk umur

// halaman form
Route::get('form', [UmurController::class, 'form'])->name('umur.form');
Route::get('success', [UmurController::class, 'success'])
->middleware(['age'])
->name('umur.success');
Route::post('proses', [UmurController::class, 'proses'])->name('umur.proses');
 


