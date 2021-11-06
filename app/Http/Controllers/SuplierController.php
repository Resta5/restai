<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function tempe()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }
}
