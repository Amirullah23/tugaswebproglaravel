<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// web.php

Route::get('/jadwal', function () {
    $jadwal = [
        ['hari' => 'Senin', 'jam' => '08.00 - 10.00'],
        ['hari' => 'Selasa', 'jam' => '13.00 - 15.00'],
        ['hari' => 'Rabu', 'jam' => '16.00 - 18.00'],
    ];

    return view('jadwal', compact('jadwal'));
});

Route::get('/paket', function () {
    $paketJasa = [
        'Paket Dasar',
        'Paket Lanjutan',
        'Paket Premium',
    ];

    return view('paket', compact('paketJasa'));
});

Route::get('/trainer', function () {
    $namaTrainer = [
        'John Doe',
        'Jane Smith',
        'Michael Johnson',
    ];

    return view('trainer', compact('namaTrainer'));
});

Route::get('/kendaraan', function () {
    $kendaraanManual = [
        'Mobil A (Manual)',
        'Mobil B (Manual)',
    ];

    $kendaraanMatic = [
        'Mobil C (Matic)',
        'Mobil D (Matic)',
        'Mobil E (Matic)',
    ];

    return view('kendaraan', compact('kendaraanManual', 'kendaraanMatic'));
});

Route::get('/lokasi', function () {
    $lokasi = [
        'alamat' => 'Jalan Raya No. 123, Kota ABC',
        'telepon' => '0123456789',
        'email' => 'info@stirmobil.com',
    ];

    return view('lokasi', compact('lokasi'));
});

