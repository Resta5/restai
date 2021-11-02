<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Keyboard Razer', 'nama_suplier' => 'Tono', 'qty' => 2, 'tgl' => 2021 - 10 - 30],
            ['nama_barang' => 'Mouse Razer', 'nama_suplier' => 'Toni', 'qty' => 1, 'tgl' => 2021 - 10 - 30],
            ['nama_barang' => 'Headset Razer', 'nama_suplier' => 'Agus', 'qty' => 2, 'tgl' => 2021 - 10 - 30],
            ['nama_barang' => 'Kursi Gaming', 'nama_suplier' => 'Nanda', 'qty' => 1, 'tgl' => 2021 - 10 - 30],
            ['nama_barang' => 'Meja gaming', 'nama_suplier' => 'Dadang', 'qty' => 2, 'tgl' => 2021 - 10 - 30],
        ];
// masukkan data ke database
        DB::table('pembelians')->insert($pembelian);

    }
}
