<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function tahu()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
}
