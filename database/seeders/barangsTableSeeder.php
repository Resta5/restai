<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'Keyboard Razer', 'varian' => 'RGB', 'harga_beli' => 150000, 'harga_jual' => 150000],
            ['nama' => 'Mouse Razer', 'varian' => 'RGB', 'harga_beli' => 100000, 'harga_jual' => 100000],
            ['nama' => 'Headset Razer', 'varian' => 'RGB', 'harga_beli' => 170000, 'harga_jual' => 170000],
            ['nama' => 'Kursi Gaming', 'varian' => 'Cyber Punk', 'harga_beli' => 1000000, 'harga_jual' => 1000000],
            ['nama' => 'Meja Gaming', 'varian' => 'Cyber Punk', 'harga_beli' => 1000000, 'harga_jual' => 1000000],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barang);
    }
}
