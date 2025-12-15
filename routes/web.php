<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// memberikan name pada routing digunakan hanya untuk verb : 
//  - get, post, put/patch, delete

Route::get('profile', function(){
    return "Ini adalah respon profile";
})->name('respon-profile');

Route::get('hallo', function(){
    return "Hallo saya belajar laravel";
})->name('respon-hello');

// route parameter wajib = wajib didefinisikan parameternya.
Route::get('mobil/{param}', function($nilai_parameter){
    return "ini respon mobil " . $nilai_parameter;
})->name('respon-mobil');

// Route dengan parameter optional
Route::get('motor/{param?}', function($parameter = 'honda'){
    return "ini respon motor " .$parameter ;
})->name('halaman-motor');

Route::get('halaman-index', function(){

    $saldo_awal = 5000000;
    $kebutuhan = 100000;
    $hasil = $saldo_awal - $kebutuhan;
    return view('halaman.index', [
        'saldo_awal' => $saldo_awal,
        'kebutuhan' => $kebutuhan,
        'total' => $hasil
    ]);

});



