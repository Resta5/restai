<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

class PesananController extends Controller
{
    public function tampil()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
}
