<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata', function () {
    $nama = "Resta";
    $jk = "Laki-laki";
    $tl = "Bandung";
    $tgllahir = "30 Oktober 2004";
    $alamat = "TCI 2";
    $agama = "Islam";
    $hobi = "Membaca";
    return "<h1>Biodata<br></h1>
    Nama:" . $nama . "<br>
    jenis kelamin: " . $jk . "<br>
    Tempat Lahir: " . $tl . "<br>
    Tanggal Lahir: " . $tgllahir . "<br>
    Alamat: " . $alamat . "<br>
    Agama: " . $agama . "<br>
    Hobi: " . $hobi;

});

Route::get('biodata2', function () {
    $nama = "Resta";
    $jk = "Laki-laki";
    $tl = "Bandung";
    $tgllahir = "30 Oktober 2004";
    $alamat = "TCI 2";
    $agama = "Islam";
    $hobi = "Membaca";

    return view('biodata', compact('nama', 'jk', 'tl', 'tgllahir', 'alamat', 'agama', 'hobi'));
});
